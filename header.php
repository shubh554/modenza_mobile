<?php ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Modenza</title> 

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
  
    <!-- Loader -->
    <div class="loader">
      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="loader-brand"> 
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header id="top" class="header-home">
      <div class="brand-panel">
        <a href="index.php" class="brand js-target-scroll">
          <img src="modenzalogo.png"  class="logo" alt="">
        </a>
      </div>
      <!-- <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="" class="fa fa-instagram"></a></li>
          <li><a href="" class="fa fa-facebook"></a></li>
          <li><a href="" class="fa fa-youtube"></a></li>
         </ul>  
      </div>  -->

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="index.php" class="brand js-target-scroll">
            <img src="modenzalogo.png"  class="logo" alt="">
          </a>
          <ul class="navbar-desctop-menu">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="about.php">About Us</a>
            </li>
            <li>
              <a href="shutter.php">Shutter</a>
            </li>
            <li>
              <a href="carcass.php">Carcass</a>
            </li>
            <li>
              <a href="contact.php">Product Enquiry</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Navigation Mobile -->
      <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
          <img src="modenzalogo.png"  class="logo" alt="">
        </a>

        <!-- Navbar Collapse -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile"> 
          <ul class="navbar-nav-mobile">
            <li>
              <a href="#">Home <i class="fa fa-angle-down"></i></a>
            </li>

            <li>
              <a href="about.php">About Us</a>
            </li>
            <li>
              <a href="#">Shutter</a>
            </li>
            <li>
              <a href="#">Carcass</a>
            </li>
            <li>
              <a href="#">Dealer Enquiry</a>
            </li>

          </ul>
        </div>
      </nav> 
    </header>
