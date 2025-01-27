<?php
require 'blog/db.php';
$query = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr.Dhapte's Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-success me-2"></i>Find A
                        Location</a>
                    <a href="#" class="text-light me-4"><i
                            class="fas fa-phone-alt text-success me-2"></i>+91-9270919090</a>
                    <a href="#" class="text-light me-0"><i
                            class="fas fa-envelope text-success me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-success m-0"><i class="fas fa-star-of-life me-3"></i>Dr.Dhapte's Clinic</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.html#treat" class="dropdown-item">What We Treat</a>
                            <a href="service.html#th" class="dropdown-item">How We Treat</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="blog.php" class="dropdown-item active">Our Blog</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
          
            </div>
            <a href="appointment.html" 
                class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book
                Appointment</a>
    </div>
    </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Physiotherapy Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-success">Blog</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid  blog py-5">
        <div class="container py-5" id="blo">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                </div>
                <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                    sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 mb-4 mt-4 justify-content-center">
                <?php while ($blog = mysqli_fetch_assoc($result)): ?>

                
                
                
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="blog/<?= htmlspecialchars($blog['featured_image']) ?>" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-success"></i><?= htmlspecialchars($blog['created_at']) ?>
                                </p>
                                
                            </div>
                            <h4><?= htmlspecialchars($blog['title']) ?></h4>
                            <p class="my-4"></p>
                            <a href="b1.php?id=<?= $blog['id'] ?>"
                                class="btn btn-success rounded-pill text-white py-2 px-4 mb-1">Read
                                More</a>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>

                
                
                
                
                
               




            </div>
        </div>
    </div>

    <!-- Blog End -->


      <!-- Footer Start -->
      <div class="container-fluid footer py-5 bg-dark text-light">
        <div class="container py-5">
            <div class="row g-4"><!-- Adjusted gap to g-4 for spacing -->
                <!-- Clinic Information -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-success mb-4">
                            <i class="fas fa-star-of-life me-3"></i>Dr. Dhapte's Clinic
                        </h4>
                        <div class="footer-links d-flex flex-column">
                            <a href="contact.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Track Order</a>
                            <a href="Privacy.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Privacy
                                Policy</a>
                            <a href="index.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Home</a>
                            <a href="appointment.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Book
                                Appointment</a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <span class="text-light me-2">Follow Us:</span>
                            <a class="btn btn-success btn-square rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-success btn-square rounded-circle mx-1" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-success btn-square rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-success btn-square rounded-circle mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href="about.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>About Us</a>
                        <a href="contact.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Contact Us</a>
                        <a href="blog.php" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Our Blog & News</a>
                        <a href="team.html" class="text-light mb-2"><i class="fas fa-angle-right me-2"></i>Our Team</a>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href="contact.html" class="text-light mb-2"><i class="fa fa-map-marker-alt me-2"></i>Atmaram
                            Apartment,Near D Mart,Kiran Banglow Rd, Tarabai Park, Kolhapur, 416003, Maharashtra</a>
                        <a href="contact.html" class="text-light mb-2"><i class="fas fa-envelope me-2"></i>info@example.</a>
                        <a href="contact.html" class="text-light mb-2"><i class="fas fa-phone me-2"></i>+91-9270919090</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4 bg-success text-light">
        <div class="container">
            <div class="row g-3 align-items-center"><!-- Adjusted gap to g-3 -->
                <div class="col-md-6 text-center text-md-start">
                    <span><i class="fas fa-copyright me-2"></i>Copyrights 2025 - 2026 Dr. Dhapte's Clinic. All rights
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-light">Terms of Service</a> |
                    <a href="#" class="text-light">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>