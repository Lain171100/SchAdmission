<?php
  include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>NCNU Website</title>

    <style>
      img{
        width:100px;
        height:200px;
        object-fit:cover;
      }

      .msg{
        height:200px;
      }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/ncnu.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home_page.php"><h2>NCNU <em>國立暨南國際大學</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home_page.php">Home
                  
              </a>
              </li> 
              <!-- <li class="nav-item">
                <a class="nav-link" href="student_insert.php">Student's Information </a>
              </li> -->
              
              <!-- <li class="nav-item">
                <a class="nav-link" href="cccadmission.php">Admission</a>
              </li> -->

              <!-- <li class="nav-item">
                <a class="nav-link" href="eduback_insert.php">Education Background</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact </a>
              </li> -->

              <!-- Log In -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="student_login.php">Log In (Students)</a>
              </li> -->

              <!-- Log Out -->
              <li class="nav-item">
                <a class="nav-link" href="student_logout.php">Log Out</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
          </div>
        </div>
        <!-- Banner 2 -->
        <div class="banner-item-02">
          <div class="text-content">
          </div>
        </div>
        <!-- Banner 3 -->
        <div class="banner-item-03">
          <div class="text-content">
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->


     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

</body>

</html>