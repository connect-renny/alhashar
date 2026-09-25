<?php
/**
 * Server side of the contact and careers forms.
 *
 * Each handler runs at the top of its page, before any output. On success it
 * redirects back to the page with ?sent=1 (Post/Redirect/Get, so a refresh
 * can't resend); on failure it returns a status the page prints into its
 * .form-status element.
 *
 * Mail goes out through PHP's mail(). On XAMPP that needs sendmail/SMTP set up
 * in php.ini — until then submissions report an error instead of vanishing.
 */
require_once __DIR__ . '/config.php';

/** Status for a .form-status element: ['state' => 'success'|'error', 'message' => '…'] or null. */
function form_status(?array $error, string $successMessage): ?array
{
    if ($error) {
        return $error;
    }
    if (isset($_GET['sent'])) {
        return ['state' => 'success', 'message' => $successMessage];
    }
    return null;
}

/** A trimmed, length-capped POST value. */
function form_value(string $name, int $max = 200): string
{
    $value = trim((string) ($_POST[$name] ?? ''));
    return mb_substr($value, 0, $max);
}

/** Strip line breaks so a value can't inject extra mail headers. */
function header_safe(string $value): string
{
    return trim(preg_replace('/[\r\n]+/', ' ', $value));
}

function redirect_sent(string $page, string $anchor): void
{
    header('Location: ' . $page . '?sent=1#' . $anchor, true, 303);
    exit;
}

/** mail(), with a failure logged to the PHP error log instead of printed on the page. */
function deliver(string $to, string $subject, string $message, array $headers): bool
{
    $sent = @mail($to, $subject, $message, implode("\r\n", $headers));
    if (!$sent) {
        error_log("Form mail to $to failed: " . (error_get_last()['message'] ?? 'unknown error'));
    }
    return $sent;
}

/**
 * Send a plain-text mail, optionally with one file attached.
 *
 * @param array|null $attachment ['path' => tmp file, 'name' => filename, 'type' => mime]
 */
function send_mail(string $to, string $subject, string $body, string $replyTo, ?array $attachment = null): bool
{
    $subject = '=?UTF-8?B?' . base64_encode(header_safe($subject)) . '?=';
    $headers = [
        'From: ' . SITE_NAME . ' <' . MAIL_FROM . '>',
        'Reply-To: ' . header_safe($replyTo),
        'MIME-Version: 1.0',
    ];

    if (!$attachment) {
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $headers[] = 'Content-Transfer-Encoding: 8bit';
        return deliver($to, $subject, $body, $headers);
    }

    $boundary = 'b' . bin2hex(random_bytes(12));
    $filename = str_replace('"', '', header_safe($attachment['name']));
    $headers[] = 'Content-Type: multipart/mixed; boundary="' . $boundary . '"';

    $message = "--$boundary\r\n"
        . "Content-Type: text/plain; charset=UTF-8\r\n"
        . "Content-Transfer-Encoding: 8bit\r\n\r\n"
        . $body . "\r\n\r\n"
        . "--$boundary\r\n"
        . 'Content-Type: ' . $attachment['type'] . '; name="' . $filename . "\"\r\n"
        . "Content-Transfer-Encoding: base64\r\n"
        . 'Content-Disposition: attachment; filename="' . $filename . "\"\r\n\r\n"
        . chunk_split(base64_encode(file_get_contents($attachment['path'])))
        . "--$boundary--";

    return deliver($to, $subject, $message, $headers);
}

/** Format label/value pairs as the body of a notification mail. */
function mail_body(string $intro, array $fields): string
{
    $lines = [$intro, ''];
    foreach ($fields as $label => $value) {
        $lines[] = $label . ': ' . ($value === '' ? '—' : $value);
    }
    $lines[] = '';
    $lines[] = 'Sent from ' . ($_SERVER['HTTP_HOST'] ?? 'the website') . ' on ' . date('Y-m-d H:i');
    return implode("\n", $lines);
}

/** Contact page "For Enquiry" form. Returns an error status, or null when there's nothing to report. */
function handle_enquiry(): ?array
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return null;
    }
    // Honeypot filled: a bot. Pretend it worked.
    if (form_value('website') !== '') {
        redirect_sent('contact.php', 'enquiry');
    }

    $name = header_safe(form_value('name', 100));
    $email = form_value('email', 200);
    $phone = form_value('phone', 40);
    $subject = header_safe(form_value('subject', 150));
    $message = form_value('message', 5000);

    if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['state' => 'error', 'message' => 'Please fill in every required field with a valid email address.'];
    }

    $body = mail_body('New enquiry from the website contact form.', [
        'Name' => $name,
        'Email' => $email,
        'Phone' => $phone,
        'Subject' => $subject,
        'Message' => "\n" . $message,
    ]);

    if (!send_mail(MAIL_ENQUIRY, 'Website enquiry: ' . $subject, $body, "$name <$email>")) {
        return ['state' => 'error', 'message' => 'Sorry, your message could not be sent. Please try again, or email us at ' . MAIL_ENQUIRY . '.'];
    }
    redirect_sent('contact.php', 'enquiry');
}

/** Careers page application form, with CV upload. */
function handle_application(): ?array
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return null;
    }
    // A POST over post_max_size arrives with $_POST and $_FILES both empty.
    if (empty($_POST) && empty($_FILES)) {
        return ['state' => 'error', 'message' => 'Your CV is too large. Please upload a file under 5 MB.'];
    }
    if (form_value('website') !== '') {
        redirect_sent('careers.php', 'apply');
    }

    $fields = [
        'First name' => header_safe(form_value('first_name', 100)),
        'Last name' => header_safe(form_value('last_name', 100)),
        'Email' => form_value('email', 200),
        'Phone' => form_value('phone', 40),
        'Position' => header_safe(form_value('position', 100)),
        'Experience' => form_value('experience', 50),
        'Location' => form_value('location', 100),
        'LinkedIn' => form_value('linkedin', 300),
    ];
    $message = form_value('message', 5000);

    foreach (['First name', 'Last name', 'Phone', 'Position', 'Experience'] as $required) {
        if ($fields[$required] === '') {
            return ['state' => 'error', 'message' => 'Please fill in every required field.'];
        }
    }
    if (!filter_var($fields['Email'], FILTER_VALIDATE_EMAIL)) {
        return ['state' => 'error', 'message' => 'Please enter a valid email address.'];
    }
    if ($fields['LinkedIn'] !== '' && !filter_var($fields['LinkedIn'], FILTER_VALIDATE_URL)) {
        return ['state' => 'error', 'message' => 'Please enter a valid LinkedIn profile URL.'];
    }
    if (empty($_POST['consent'])) {
        return ['state' => 'error', 'message' => 'Please agree to the privacy terms to submit your application.'];
    }

    $cv = $_FILES['cv'] ?? null;
    if (!$cv || $cv['error'] === UPLOAD_ERR_NO_FILE) {
        return ['state' => 'error', 'message' => 'Please attach your CV.'];
    }
    if (in_array($cv['error'], [UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE], true) || $cv['size'] > CV_MAX_BYTES) {
        return ['state' => 'error', 'message' => 'Your CV is too large. Please upload a file under 5 MB.'];
    }
    $extension = strtolower(pathinfo($cv['name'], PATHINFO_EXTENSION));
    if ($cv['error'] !== UPLOAD_ERR_OK || !is_uploaded_file($cv['tmp_name'])) {
        return ['state' => 'error', 'message' => 'Your CV could not be uploaded. Please try again.'];
    }
    if (!in_array($extension, CV_EXTENSIONS, true)) {
        return ['state' => 'error', 'message' => 'Please upload your CV as a PDF, DOC or DOCX file.'];
    }

    $types = [
        'pdf' => 'application/pdf',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ];
    $name = $fields['First name'] . ' ' . $fields['Last name'];
    $body = mail_body('New job application from the website careers form.', $fields + ['Message' => "\n" . $message]);
    $attachment = [
        'path' => $cv['tmp_name'],
        'name' => preg_replace('/[^A-Za-z0-9]+/', '-', $name) . '-CV.' . $extension,
        'type' => $types[$extension],
    ];

    if (!send_mail(MAIL_CAREERS, 'Job application: ' . $fields['Position'] . ' — ' . $name, $body, "$name <{$fields['Email']}>", $attachment)) {
        return ['state' => 'error', 'message' => 'Sorry, your application could not be sent. Please try again, or email your CV to ' . MAIL_CAREERS . '.'];
    }
    redirect_sent('careers.php', 'apply');
}
