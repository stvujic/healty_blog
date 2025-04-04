<?php
require_once "model/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome za zvezdice -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'navigation/navigation.php'; ?>

    <!-- Notification bar -->
    <div class="notification-bar">
        Did you know? Some of our services may be covered by private health insurance, making your journey to health and well-being more accessible than ever!
    </div>

    <div class="health-banner">
        <div class="content-box">
            <h2>Your journey to a healthy life</h2>
            <a href="#contact" class="btn-contact">Contact Us</a>
        </div>
    </div>

    <div class="services">
        <h2>Our Services</h2>
        <div class="service-boxes">
            <div class="service-box">
                <img src="/images/service_1.jpg" alt="Nutrition Plan">
                <h3>Nutrition Plan</h3>
            </div>
            <div class="service-box">
                <img src="/images/service_1.jpg" alt="Life Coach">
                <h3>Life Coach</h3>
            </div>
            <div class="service-box">
                <img src="/images/service_1.jpg" alt="Weight Loss">
                <h3>Weight Loss</h3>
            </div>
            <div class="service-box">
                <img src="/images/service_1.jpg" alt="Workout Plan">
                <h3>Workout Plan</h3>
            </div>
        </div>
    </div>

    <div class="about-section">
        <div class="about-box">
            <img src="/images/about_us.jpg" alt="About Us" class="about-img">
            <div class="about-text">
                <h2>About Us</h2>
                <p>At Healthy Blog, we're passionate about guiding individuals toward a balanced lifestyle. 
                Through personalized coaching and wellness plans, we empower you to take control of your health 
                and reach your goals with confidence and clarity.</p>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->
    <div class="testimonial-section">
        <h2>Testimonials</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="testimonial-box">
                        <img src="https://via.placeholder.com/80" alt="Client 1">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Absolutely life-changing. I feel more energetic and confident than ever!"</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <img src="https://via.placeholder.com/80" alt="Client 2">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"The personalized approach made all the difference. Highly recommend!"</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <img src="https://via.placeholder.com/80" alt="Client 3">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Supportive team and great results. Best decision I ever made."</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <img src="https://via.placeholder.com/80" alt="Client 4">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>"I’ve learned so much about how to care for myself holistically."</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <img src="https://via.placeholder.com/80" alt="Client 5">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"A wonderful experience from start to finish. Thank you!"</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="fa-solid fa-chevron-left fa-2x text-dark"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="fa-solid fa-chevron-right fa-2x text-dark"></span>
            </button>
        </div>
    </div>

    <footer class="site-footer">
        <p>Website created by Stefan Vujic &copy; 2025 All Rights Reserved <sup>®</sup></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
