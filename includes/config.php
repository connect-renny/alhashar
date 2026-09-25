<?php
/**
 * Site-wide settings and helpers. Every page includes this first, via
 * includes/head.php.
 */

// Where form submissions are delivered.
const SITE_NAME = 'Al Hashar Group';
const MAIL_ENQUIRY = 'ahcgroup@omantel.net.om';
const MAIL_CAREERS = 'careers@alhashargroup.com';
// Sender address for outgoing mail — use a mailbox on the site's own domain
// so the message isn't flagged as spoofed.
const MAIL_FROM = 'no-reply@alhashargroup.com';

// CV uploads (careers form).
const CV_MAX_BYTES = 5 * 1024 * 1024;
const CV_EXTENSIONS = ['pdf', 'doc', 'docx'];

/** Escape a string for HTML output. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Page defaults; each page overrides what it needs before including head.php. */
$page = array_merge(
    [
        'title' => SITE_NAME,
        'description' => '',
        'og_title' => null,       // falls back to title
        'og_description' => null, // falls back to description
        'og_image' => 'assets/images/hero-video-poster.jpg',
        'nav' => '',              // top-level nav key: home, about, businesses, careers, contact, news
        'subnav' => '',           // Our Businesses dropdown key: automotive, electronics, …
    ],
    $page ?? []
);
