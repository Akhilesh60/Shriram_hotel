<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">

<!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  
  
  
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style1.css" rel="stylesheet">  
 <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Arizonia&family=Berkshire+Swash&family=Birthstone&family=Birthstone+Bounce:wght@500&family=Cardo:wght@400;700&family=Cookie&family=Dancing+Script&family=Engagement&family=Fasthand&family=Geologica:wght@700&family=Grey+Qo&family=Kalam:wght@300&family=Kaushan+Script&family=Merienda:wght@400;600&family=Pacifico&family=Satisfy&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- jQuery (https://jquery.com/download/) -->

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
        </script>
		
		
		
		<style>
		/**
* Template Name: Restaurantly
* Updated: Sep 20 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  background: #0c0b09;
  color: #fff;
}

a {
  color: #cda45e;
  text-decoration: none;
}

a:hover {
  color: #d9ba85;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Playfair Display", serif;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #1a1814;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #1a1814;
  border-top-color: #cda45e;
  border-bottom-color: #cda45e;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1s linear infinite;
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
  border: 2px solid #cda45e;
}

.back-to-top i {
  font-size: 28px;
  color: #cda45e;
  line-height: 0;
}

.back-to-top:hover {
  background: #cda45e;
  color: #1a1814;
}

.back-to-top:hover i {
  color: #444444;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  height: 40px;
  font-size: 14px;
  transition: all 0.5s;
  z-index: 996;
}

#topbar.topbar-scrolled {
  top: -40px;
}

#topbar .contact-info i {
  font-style: normal;
  color: #d9ba85;
}

#topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}

#topbar .languages ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  color: #cda45e;
}

#topbar .languages ul a {
  color: white;
}

#topbar .languages ul li+li {
  padding-left: 10px;
}

#topbar .languages ul li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: rgba(255, 255, 255, 0.5);
  content: "/";
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: rgba(12, 11, 9, 0.6);
  border-bottom: 1px solid rgba(12, 11, 9, 0.6);
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  top: 40px;
}

#header.header-scrolled {
  top: 0;
  background: rgba(0, 0, 0, 0.85);
  border-bottom: 1px solid #37332a;
}

#header .logo {
  font-size: 28px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
# Book a table button Menu
--------------------------------------------------------------*/
.book-a-table-btn {
  margin: 0 0 0 15px;
  border: 2px solid #cda45e;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
}

.book-a-table-btn:hover {
  background: #cda45e;
  color: #fff;
}

@media (max-width: 992px) {
  .book-a-table-btn {
    margin: 0 15px 0 0;
    padding: 8px 20px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #d9ba85;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  color: #444444;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #cda45e;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 6px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1a1814;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #cda45e;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #cda45e;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("img/y3.jpeg") top center;
  background-size: cover;
  object-fit:cover;
  position: relative;
  
  padding: 0;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  padding-top: 110px;
}

@media (max-width: 992px) {
  #hero .container {
    padding-top: 98px;
  }
}

#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h1 span {
  color: #cda45e;
}

#hero h2 {
  color: #eee;
  margin-bottom: 10px 0 0 0;
  font-size: 22px;
}

#hero .btns {
  margin-top: 30px;
}

#hero .btn-menu,
#hero .btn-book {
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;
}

#hero .btn-menu:hover,
#hero .btn-book:hover {
  background: #cda45e;
  color: #fff;
}

#hero .btn-book {
  margin-left: 15px;
}

#hero .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#cda45e 50%, rgba(205, 164, 94, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}

#hero .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

#hero .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  animation-delay: 0s;
  animation: pulsate-btn 2s;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(205, 164, 94, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

#hero .play-btn:hover::after {
  border-left: 15px solid #cda45e;
  transform: scale(20);
}

#hero .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  animation: none;
  border-radius: 0;
}

@media (min-width: 1366px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 992px) {
  #hero .play-btn {
    margin-top: 30px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: auto;
  }

  #hero .container {
    padding-top: 130px;
    padding-bottom: 60px;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #1a1814;
}

.section-title {
  padding-bottom: 40px;
}

.section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}

.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  margin: 4px 10px;
}

.section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  font-family: "Playfair Display", serif;
  color: #cda45e;
}
 }
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-top {
  background: #0c0b09;
  border-top: 1px solid #37332a;
  border-bottom: 1px solid #28251f;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 300;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Playfair Display", serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #28251f;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #cda45e;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #cda45e;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #cda45e;
}

#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #28251f;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  border: 1px solid #454035;
}

#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
  background: #28251f;
  color: white;
}

#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: -1px;
  right: -1px;
  bottom: -1px;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px 2px 20px;
  background: #cda45e;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #d3af71;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

		</style>
</head>

    <body>
        
        <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center   fw-bolder">
        <i class="bi bi-phone d-flex align-items-center  fw-bolder"><span>09415140674</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4   fw-bolder"><span>Opening  timing:24 hours all days</span></i>
      </div>


    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <a href="shriram/index.html"><h1 class="navbar-title"style=" color:white; font-weight:bold; text-shadow:2px 2px 2px black; font-size:40px;font-family: 'Kaushan Script', cursive;">Shri <span style="color:orange;">Ram </span>Hotel</h1></a>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
          <li><a class="nav-link scrollto active" href="../index.php#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="../index.php#events">EVENT</a></li>
		  <li class="dropdown"><a href="../index.html#room"><span></span>Room<i class="bi bi-chevron-down"></i></a>
            <ul>
			  <li><a href="../deluxe-master/Deluxe-Double-Bed-Room.php">Deluxe Double Bed Room</a></li>
			  <li><a href="../deluxe-master/quard-deluxe-room.php">Quad Deluxe Room(Family Room)</a></li>
			  <li><a href="../deluxe-master/SuperDeluxeDoubleBedRoom.php">Super Deluxe Double Bed Room</a></li>
			  <li><a href="../deluxe-master/StandardDoubleBedRoomNonAC.php">Standard Double Bed Room Non AC</a></li>
			  <li><a href="../deluxe-master/Triple_delux_bedroom.php">Triple Bed Deluxe Room</a></li>          
			  <li><a href="../deluxe-master/Triple_bed_nonac_bedroom.php">Triple Bed Non AC Room</a></li>          
              
             </ul>
          </li>
        
         <li class="nav-item dropdown">
							<a class=" 	 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="../deluxe-master/dinning.php">Dinning</a></li>
								<li><a class="dropdown-item" href="../deluxe-master/banquet.php">Banquet</a></li>
								<li><a class="dropdown-item" href="../deluxe-master/conferenceHall.php">Conference Hall</a></li>
							</ul>
						  </li>
          <li><a class="nav-link scrollto" href="../tourist_index.php">Tourist  Place</a></li>
          <li><a class="nav-link scrollto" href="../index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1  class="mb-5   d-flex justify-content-center" style="font-family: 'Kaushan Script', cursive; width:90vw;  font-size:6rem;"><span   style="color:white;">Welcome to</span> <span>Shri Ram Hotel</span></h1>
          
		  						<h1  class="mt-5 d-flex justify-content-center"style="   width:90vw;font-family: 'Kaushan Script', cursive; font-weight:bold;  font-size:8rem;text-shadow:2px 2px 2px black;"><div  class="mt-4">Gallery</div></h1>
								
        </div>
       
      </div>
    </div>
  </section><!-- End Hero -->
            <ul class="cd-hero-slider"  style="background-color:#F5F5DC;">

                <!-- Page 1 Gallery One -->
                <li class="selected"   style="background-color:#F5F5DC;">                    
                    <div class="cd-full-width" >
                        <div class="container-fluid js-tm-page-content"data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r1.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <p class="tm-figure-description">USB Sockets By the Bed</p>
                                                <a href="img/r1.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r13.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Complimentary Bottled Water</p>
                                                <a href="img/r13.webp">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r38.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Quiet Air Conditioning </p>
                                                <a href="img/r38.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r37.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">Netflix on TV.</p>
                                                <a href="img/r37.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/p1.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">Breakfast in Bed at No Additional Charge.</p>
                                                <a href="img/p1.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/m4.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <p class="tm-figure-description">Free High-Speed WiFi.</p>
                                                <a href="img/m4.webp">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r33.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Plenty of Pillows.</p>
                                                <a href="img/r33.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r31.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Black Out Curtains .</p>
                                                <a href="img/r31.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>   
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r29.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">Well-Stocked Coffee Machine.</p>
                                                <a href="img/r29.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r22.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">In-room Fridge .</p>
                                                <a href="img/r22.webp">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r20.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">Power Shower with a Big Shelf .</p>
                                                <a href="img/r20.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r13.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Fancy Toiletries .</p>
                                                <a href="img/r13.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/r1.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">A Dressing Table with Good Lighting & Plug .</p>
                                                <a href="img/r1.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img24.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Sound-proofed Walls and Doors </p>
                                                <a href="img/img24.webp">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/imh19.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Personalised Welcome Card </p>
                                                <a href="img/imh19.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item  ">
                                        <figure class="effect-sadie">
                                            <img src="img/img18.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Iron & Ironing Board.</p>
                                                <a href="img/img18.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div> 
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img17.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Large & Fluffy Bath Towels .</p>
                                                <a href="img/img17.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img16.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">A Treat on Check Out</p>
                                                <a href="img/img16.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img14.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">A dependable hotel with a full range of services, amenities and facilities, comfortable public areas, many with meeting space .</p>
                                                <a href="img/img14.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img12.webp" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Comfortable and Well Equipped Rooms. ... </p>
                                                <a href="img/img12.webp">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img10.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                               
                                                <p class="tm-figure-description">Quality Customer Service. ... .</p>
                                                <a href="img/img10.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img8.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                
                                                <p class="tm-figure-description">Hotels are required by law to provide a certain number of handicapped-accessible rooms..</p>
                                                <a href="img/img8.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img6.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>

                                                <p class="tm-figure-description">Aparthotels are offering these types of rooms, but they can also be found at other traditional hotel chains. ... .</p>
                                                <a href="img/img8.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/img4.avif" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/img4.avif">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y28.jpeg" alt="Image"   class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y28.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y24.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/24.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y7.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y7.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y22.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y22.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y20.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y20.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y15.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y15.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y18.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y18.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									<div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/y16.jpeg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <!-- <h2 class="tm-figure-title">Image <span><strong>Twentyfour</strong></span></h2> -->
                                                <p class="tm-figure-description"> usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom,.</p>
                                                <a href="img/y16.jpeg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
									
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>
			</ul>
                
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        
        <script src="js/tether.min.js"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight
                                        + $('.tm-footer').outerHeight();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');

                // Write current year in copyright text.
                $(".tm-copyright-year").text(new Date().getFullYear());
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(37.779724, -122.452152),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {   
                loadGoogleMap(); // Google Map
            });

        </script>        

<script>
	/**
* Template Name: Restaurantly
* Updated: Sep 20 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  let selectTopbar = select('#topbar')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
      } else {
        selectHeader.classList.remove('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Menu isotope and filter
   */
  window.addEventListener('load', () => {
    let menuContainer = select('.menu-container');
    if (menuContainer) {
      let menuIsotope = new Isotope(menuContainer, {
        itemSelector: '.menu-item',
        layoutMode: 'fitRows'
      });

      let menuFilters = select('#menu-flters li', true);

      on('click', '#menu-flters li', function(e) {
        e.preventDefault();
        menuFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        menuIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        menuIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Events slider
   */
  new Swiper('.events-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()
</script>	
 <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>	

</body>
</html>