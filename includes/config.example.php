<?php
/**
 * AHS 2003 Portal - Configuration Template
 *
 * INSTRUCTIONS:
 * 1. Copy this file to config.php
 * 2. Fill in your actual credentials
 * 3. config.php is in .gitignore and will NOT be committed
 *
 * You will need different config.php values for:
 * - Local development
 * - Development server (development.ahs2003.com)
 * - Production server (ahs2003.com)
 */

// =============================================================================
// ENVIRONMENT
// =============================================================================
// Options: 'development' or 'production'
define('ENVIRONMENT', 'development');

// =============================================================================
// SITE SETTINGS
// =============================================================================
define('SITE_NAME', 'AHS Class of 2003');
define('SITE_URL', 'https://development.ahs2003.com'); // No trailing slash
define('SITE_DESCRIPTION', 'Albany High School Class of 2003 Portal');

// =============================================================================
// DATABASE CONFIGURATION
// =============================================================================
define('DB_HOST', 'localhost');
define('DB_NAME', 'ahs2003_dev');        // Use 'ahs2003' for production
define('DB_USER', 'ahs2003_admin');
define('DB_PASS', 'YOUR_DATABASE_PASSWORD_HERE');
define('DB_CHARSET', 'utf8mb4');

// =============================================================================
// EMAIL CONFIGURATION (Brevo SMTP)
// =============================================================================
define('MAIL_USE_SMTP', true);
define('SMTP_HOST', 'smtp-relay.brevo.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'YOUR_BREVO_EMAIL_HERE');
define('SMTP_PASS', 'YOUR_BREVO_SMTP_KEY_HERE');
define('SMTP_FROM_EMAIL', 'noreply@ahs2003.com');
define('SMTP_FROM_NAME', 'AHS 2003');

// =============================================================================
// CLOUDFLARE TURNSTILE (Bot Protection)
// =============================================================================
define('TURNSTILE_ENABLED', true);
define('TURNSTILE_SITE_KEY', 'YOUR_TURNSTILE_SITE_KEY_HERE');
define('TURNSTILE_SECRET_KEY', 'YOUR_TURNSTILE_SECRET_KEY_HERE');

// =============================================================================
// SECURITY
// =============================================================================
// Generate a unique key for sessions/tokens (use a long random string)
define('SECRET_KEY', 'GENERATE_A_RANDOM_SECRET_KEY_HERE');

// =============================================================================
// ERROR REPORTING
// =============================================================================
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// =============================================================================
// TIMEZONE
// =============================================================================
date_default_timezone_set('America/New_York');

// =============================================================================
// SESSION CONFIGURATION
// =============================================================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
