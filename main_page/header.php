<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cafe Twins</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="main_page/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="main_page/lib/animate/animate.min.css" rel="stylesheet">
    <link href="main_page/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="main_page/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="main_page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="main_page/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid text-primary d-none d-lg-flex" style="background-color: 	#00FFFF;">
        <div class="container py-3">
            <div class="d-flex align-items-center" >
                <a href="index.html">
                    <h2 class="text-dark fw-bold m-0">Cafe Twins</h2>
                </a>
                <div class="ms-auto d-flex text-dark align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. rayapuncak</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>0896541244</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">Cafe Twins</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php?page=home" class="nav-item nav-link <?php if($_REQUEST && $_REQUEST['page'] == 'home'):?>active<?php endif; ?>">Home</a>
                        <a href="index.php?page=about" class="nav-item nav-link <?php if($_REQUEST && $_REQUEST['page'] == 'about') echo 'active' ?>">About</a>
                        <a href="index.php?page=menu" class="nav-item nav-link <?php if($_REQUEST && $_REQUEST['page'] == 'menu') echo 'active' ?>">Menu</a>
                        <a href="index.php?page=contact" class="nav-item nav-link <?php if($_REQUEST && $_REQUEST['page'] == 'contact') echo 'active' ?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->