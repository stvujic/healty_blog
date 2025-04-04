<?php


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'navigation/navigation.php'; ?>

    <div class="contact-page container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg rounded-4 p-4">
                    <h2 class="text-center mb-4">Kontaktiraj nas</h2>
                    <form action="send.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ime i prezime</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email adresa</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Poruka</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Pošalji poruku</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</body>
</html>