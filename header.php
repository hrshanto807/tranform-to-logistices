<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header>
        <!-- header Top area start -->
        <section class="header-top-area-all">
            <div class="container">
                <div class="tal-header-top-area d-flex justify-content-between align-items-center">
                    <div class="header-logo-area">
                        <img src="<?php echo get_template_directory_uri();?>/asset/img/Logo.png" alt="">
                    </div>
                    <div class="header-contact-area d-flex justify-content-center gap-5">
                        <!-- single content header start -->
                        <div class="tal-single-header-content">
                            <i class="fa-regular fa-clock"></i>
                            <h6 class="text-white">Mon - Sat 9.00 - 18.00<br>
                                Sunday Closed
                            </h6>
                        </div>
                        <!-- single content header end -->
                        <!-- single content header start -->
                        <div class="tal-single-header-content">
                            <i class="fa-regular fa-envelope"></i>
                            <h6 class="text-white">Email<br><a class="text-white"
                                    href="mailto:">contact@logistics.com</a>
                            </h6>
                        </div>
                        <!-- single content header end -->
                        <div class="tal-single-header-content">
                            <i class="fa-solid fa-phone"></i>
                            <h6 class="text-white">Call Us <br><a class="text-white" href="tel:"> (00) 112 365 489</a>
                            </h6>
                        </div>
                        <!-- single content header end -->

                    </div>
                </div>
            </div>
        </section>
        <!-- header Top area end -->
        <!-- header bootm area start -->
        <section class="tal-header-main-area-area-all">
            <div class="container">
                <div class="header-tall-header-main-area d-flex align-items-center justify-content-between">
                    <!-- header menu area start -->
                    <div class="header-menu">
                        <nav class="navbar navbar-expand-lg tal-primary-menu">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="menu-toggle">
                                        <i class="fa-solid fa-bars"></i>
                                    </span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="index.html" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                About
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Project
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- header menu area end -->
                    <!-- header right area start -->
                    <div class="tal-header-right">
                        <div class="tal-header-icon">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <a href="#" class="tal-btn">Request Quote</a>
                    </div>
                    <!-- header right area end -->
                </div>
            </div>
        </section>
        <!-- header bootm area end -->
    </header>
    <main>