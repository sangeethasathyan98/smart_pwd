<?php 
ob_start();
include './db.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Smart PWD</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h1></h1>
                                     <img src="img/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 8:00 - 9:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+012 345 6789</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="tender_notice.php" class="nav-item nav-link active">Tender Notice</a>
                                
                              <a target="_blank" href="job.php" class="nav-item nav-link">Job Post</a>
                              
                                
                                <a href="complaint.php" class="nav-item nav-link">Complaint</a>
                            </div>
                            <div class="ml-auto">
                               <a class="btn" href="login.php">Login</a>
                                 
                            </div>
                            <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Register
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="register.php">Contractor</a></li>
    <hr>
    <li><a href="Staff_register.php">Executive Officer</a></li>
    <hr>
    <li><a href="#">Engineer</a></li>
  </ul>
</div>
               
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
          <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Job Post</p>
                       
                    </div>
                    <div style="align:center;" class="row">
                       
                        <div style="text-align: center;" class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                
                                <div class="team-text">
                                    <h2 style="height: 35px;"> Executive Officer</h2>
                                    <p>No:Of Vacancies : 1</p>
                                    <p>Age Limit : 25-45</p>
                                    <p>Qualification : Degree/Diploma</p>
<div class="about-text">
                               
                                <a class="btn-success" href="Staff_register.php">Apply Now</a>
                            </div>
                                </div>
                             
                            </div>
                        </div> <div style="text-align: center;" class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                
                                <div class="team-text">
                                    <h2 style="height: 35px;"> Engineers(civil)</h2>
                                    <p>No:Of Vacancies : 1</p>
                                    <p>Age Limit : 25-45</p>
                                    <p>Qualification : Btech/Diploma in civil Engineering</p>
<div class="about-text">
                               
                                <a class="btn-success" href="engineer_register.php">Apply Now</a>
                            </div>
                                </div>
                       
                     
                    </div>
                </div>
            </div>  
            <!-- Page Header End -->


            <!-- Service Start -->
            
            
            
         
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
