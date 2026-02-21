<?php
/**
 * AHS Class of 2003 Portal
 * Main entry point
 */

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to AHS Class of 2003</h1>
    </header>

    <main>
        <section class="hero">
            <h2>Coming Soon</h2>
            <p>Our class portal is under construction.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> AHS Class of 2003</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
