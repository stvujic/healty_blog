<?php
require_once "model/database.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Healthy Blog</title>
        
        <!-- Uključivanje Bootstrap CSS CDN-a u head sekciji -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>
        <?php include 'navigation/navigation.php'; ?>

        <!-- Notification bar ispod navigacije -->
        <div class="notification-bar">
            Did you know? Some of our services may be covered by private health insurance, making your journey to health and well-being more accessible than ever!
        </div>

        <div class="health-banner">
            <div class="content-box">
                <h2>Your journey to a healthy life</h2>
                <a href="#contact" class="btn-contact">Contact Us</a>
            </div>
        </div>

        <!-- Uključivanje Bootstrap JS CDN-a na kraju stranice -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
