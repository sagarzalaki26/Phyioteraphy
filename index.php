<?php
require 'blog/db.php';
$query = "SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr.Dhapate's Clinic</title>
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
                    <a href="#" class="text-light me-4 "><i class="fas fa-map-marker-alt text-success me-2"></i>Find A
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
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="text-success m-0"><i class="fas fa-star-of-life me-3"></i>Dr.Dhapte's Clinic</h1>
                <!-- <img src="img/download (1).jpg" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.html#treat" class="dropdown-item">What We Treat</a>
                            <a href="service.html#th" class="dropdown-item">How We Treat</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="blog.php  " class="dropdown-item">Our Blog</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="appointment.html"
                    class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book
                    Appointment</a>
            </div>
        </nav>


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy
                            Center</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                        <p class="mb-5 fs-5 animated slideInDown"></p>
                        <a class="btn btn-success rounded-pill text-white py-3 px-5" href="appointment.html">Book
                            Appointment</a>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy
                            Center</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                        <p class="mb-5 fs-5 animated slideInDown">
                        </p>
                        <a class="btn btn-success rounded-pill text-white py-3 px-5" href="appointment.html">Book
                            Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">What We Treat</h4>
                </div>
                <h1 class="display-3 mb-4">Our Service Help You To Live Happy Life !</h1>
                <p class="mb-0"></p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Sciatica & Back Pain</h5>
                                <p class="mb-4">Sciatica & Back Pain Physiotherapy Edmonton</p>
                                <a href="t1.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Shoulder Pain</h5>
                                <p class="mb-4">Shoulder Pain Physiotherapy Edmonton </p>
                                <a href="t2.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Pre-Surgical physiotherapy</h5>
                                <p class="mb-4">Pre-Surgical physiotherapy Edmonton</p>
                                <a href="t3.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t4.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Vestibular Rehabilitation </h5>
                                <p class="mb-4">Vestibular Physiotherapy Edmonton</p>
                                <a href="t4.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t5.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Chronic Pain</h5>
                                <p class="mb-4">Chronic Pain Physiotherapy Edmonton </p>
                                <a href="t5.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t6.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">
                                    Elbow Wrist and Hand Pain Physiotherapy Edmonton </h5>
                                <p class="mb-4">Elbow Wrist and Hand Pain Physiotherapy Edmonton</p>
                                <a href="t6.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t7.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Total Joint Replacement</h5>
                                <p class="mb-4">Total Joint Replacement Physiotherapy Edmonton</p>
                                <a href="t7.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/t8.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Arthritis Pain Relief</h5>
                                <p class="mb-4">Arthritis Pain Relief Physiotherapy Edmonton</p>
                                <a href="t8.html" class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="service.html#treat">Services
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->




    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">How we treat</h4>
                </div>
                <h1 class="display-3 mb-4">
                    </p>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th1.jpg" style="background-color: rgb(25, 135, 84);"
                                    class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Physical Therapy</h5>
                                    <p class="mb-4">Family Physical Therapy Services In Edmonton</p>
                                    <a href="ht1.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th2.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Deep tissue massage Therapy</h5>
                                    <p class="mb-4">Deep Tissue Massage Therapy Edmonton | Family® Physio
                                        Deep Tissue Massage Therapy Edmonton</p>
                                    <a href="ht-2.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th3.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Relaxation Massage Therapy</h5>
                                    <p class="mb-4">Relaxation Massage Therapy Edmonton</p>
                                    <a href="ht-3.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th4.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Concussion Physiotherapy</h5>
                                    <p class="mb-4">Concussion Physiotherapy Edmonton
                                    </p>
                                    <a href="ht-4.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th5.webp" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">CUSTOM ORTHOTICS</h5>
                                    <p class="mb-4">Custom Orthotics Edmonton | Sports Orthotics Clinic
                                        Custom Orthotics Edmonton</p>
                                    <a href="ht-5.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th6.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Graston Technique</h5>
                                    <p class="mb-4">Graston Technique Edmonton</p>
                                    <a href="ht-6.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th7.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">WHIPLASH RESPONSE REGIMEN</h5>
                                    <p class="mb-4">Whiplash Response Regimen Edmonton </p>
                                    <a href="ht-7.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="img/th8.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Electrotherapeutic Modalities</h5>
                                    <p class="mb-4">Electrotherapeutic Modalities Physiotherapy Edmonton</p>
                                    <a href="ht-8.html"
                                        class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="service.html#th" class="btn btn-suucess rounded-pill text-white py-3 px-5">More
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;"
                                alt="Image">
                            <div class="about-img-inner">
                                <img src="img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">15 years experience</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">About Us</h4>
                            <h1 class="display-3 mb-4">We are Ready to Help Improve Your Treatment.</h1>
                            <p class="mb-4">We specialize in providing top-quality massage therapies designed to ease
                                stress, relieve pain, and rejuvenate your body and mind. </p>
                            <p class="mb-4">Our skilled therapists tailor each session to your unique needs, offering a
                                variety of treatments such as therapeutic, relaxation, and specialized massages. Using
                                premium oils and techniques, we ensure a soothing experience in a calm, welcoming
                                environment. </p>
                            <p class="mb-4">we are committed to helping you achieve balance and well-being. Visit us
                                today and discover the difference a great massage can make!</p>
                            <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Refresing to get
                                    such a personal touch.</p>
                                <p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Duis aute irure
                                    dolor in reprehenderit in voluptate.</p>
                                <p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Velit esse
                                    cillum
                                    dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0">Solutions To Your Pain</h4>
                            <h1 class="display-4 mb-4">Best Quality Services With Minimal Pain Rate</h1>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti
                                amet
                                at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia
                                voluptas
                                maxime veniam necessitatibus saepe in ab? Repellat!</p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Body
                                                Relaxation
                                            </h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                                deserunt qui cupiditate veritatis enim ducimus.</p>
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Body
                                                Relaxation
                                            </h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                                deserunt qui cupiditate veritatis enim ducimus.</p>
                                        </div>
                                        <div class="text-start mb-4">
                                            <a  href="#"
                                                class="btn btn-success rounded-pill text-white py-3 px-5">More
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video h-100">
                                        <img src="img/video-img.jpg" class="img-fluid rounded w-100 h-100"
                                            style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                            data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-success">Get In Touch</p>
                            <h1 class="display-5 mb-4">Get Appointment</h1>
                            <form>
                                <div class="row gy-3 gx-4">
                                    <div class="col-xl-6">
                                        <input type="text"
                                            class="form-control py-3 border-success bg-transparent text-white"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email"
                                            class="form-control py-3 border-success bg-transparent text-white"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="phone" class="form-control py-3 border-success bg-transparent"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-c bg-transparent"
                                            aria-label="Default select example">
                                            <option selected>Your Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">FeMale</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="date" class="form-control py-3 border-success bg-transparent">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-success bg-transparent"
                                            aria-label="Default select example">
                                            <option selected>Department</option>
                                            <option value="1">Physiotherapy</option>
                                            <option value="2">Physical Helth</option>
                                            <option value="2">Treatments</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-success bg-transparent text-white"
                                            name="text" id="area-text" cols="30" rows="5"
                                            placeholder="Write Comments"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" 
                                            class="btn btn-success text-white w-100 py-3 px-5">SUBMIT
                                            NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
                    <p class="mb-0"></p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Message Physio Therapist</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <a 
                                        class="btn btn-square btn- text-successwhite rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a 
                                        class="btn btn-square btn-success text-white rounded-circle mx-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Full Name</h5>
                                <p class="mb-0">Doctor of Physical therapy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients are Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Asperiores
                                nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                                voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Asperiores
                                nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                                voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Asperiores
                                nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                                voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-2 text-white-50">New York, USA</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-fluid  blog py-5">
            <div class="container py-5" id="blo">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                    </div>
                    <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                        atque
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
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-success"></i> <?= htmlspecialchars($blog['created_at']) ?>
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
    
                    
                    
                    
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="blog.html" class="btn btn-success rounded-pill text-white py-3 px-5"> See More Blog</a>
            </div>
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
    <!-- Copyright End -->


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