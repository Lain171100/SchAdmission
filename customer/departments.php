<?php
  include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

    
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <title>NCNU Website</title>

        <style>
      /* Department Image Size */
      .product-item img{
        width:100px;
        height:200px;
        object-fit:cover;
      }

      /* Department Textbox */
      .msg{
        height:200px;
      }

    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/ncnu.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="home_page.php">
                    <h2>NCNU <em>國立暨南國際大學</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                  <a class="nav-link" href="home_page.php">Home
                </a>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About </a>
                </li>
                </li> 

                <li class="nav-item active">
                  <a class="nav-link" href="departments.php">Departments</a>
                  <span class="sr-only">(current)</span>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact </a>
                </li>

                <!-- Log In -->
                <li class="nav-item">
                  <a class="nav-link" href="student_login.php">Log In (Students)</a>
                </li>

                <!-- Log In -->
                <li class="nav-item">
                  <a class="nav-link" href="../admin/login.php">Log In (Teacher)</a>
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

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <!--  -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>List of Departments</h2>
              <!-- <a href="departments.php">View All Departments &nbsp;  <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="product-item">
              <a href="https://www.csie.ncnu.edu.tw/home"><img src="assets/images/csie.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.csie.ncnu.edu.tw/home"><h4>Department of Computer Science & Information Engineering</h4></a>
                
                <p>We value every member of the CS family (students and professors) </p>
                
                <span> <a href="https://www.csie.ncnu.edu.tw/home">See More</a> </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.econ.ncnu.edu.tw/"><img src="assets/images/econ.jpg" alt="" ></a>
              <div class="down-content msg">
                <a href="https://www.econ.ncnu.edu.tw/"><h4>Department of Econic</h4></a>
                <p>The Department of Economics (Institute) is affiliated to the School of Management </p>
                <span> <a href="https://www.econ.ncnu.edu.tw/">See More</a> </span>
              </div>
            </div>
          </div>
          <div class="col-md-4 msg">
            <div class="product-item">
              <a href="https://ch.ncnu.edu.tw/"><img src="assets/images/foreign.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://ch.ncnu.edu.tw/"><h4>Department of Chinese as a Second Language</h4></a>
                <p>Those who graduated from a non-Chinese-speaking area must attach the new version of (TOCFL) </p>
                <span> <a href="https://ch.ncnu.edu.tw/">See More</a> </span>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.epa.ncnu.edu.tw/pg.asp?theme=87"><img src="assets/images/edu.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.epa.ncnu.edu.tw/pg.asp?theme=87"><h4>Department of Educational Policy and Administration</h4></a>
                <p>  The School of Education was formally established on February 1, 2010, with 3 departments and 1 school</p>
                <span> <a href="https://www.epa.ncnu.edu.tw/pg.asp?theme=87">See More</a> </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://gec.ncnu.edu.tw/"><img src="assets/images/generaledu.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://gec.ncnu.edu.tw/"><h4>Department of General Education Center</h4></a>
                <p>In order to cooperate with the characteristic development of Jinan University,</p>
                <span> <a href="https://gec.ncnu.edu.tw/">See More</a> </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.cseas.ncnu.edu.tw/"><img src="assets/images/research.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.cseas.ncnu.edu.tw/"><h4>Department of Southeast Asian Studies</h4></a>
                <p>We focus on the research of contemporary Southeast Asian politics, economy, </p>
                <span> <a href="https://www.cseas.ncnu.edu.tw/">See More</a> </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <!-- Google Translate -->
              <div id="google_translate_element"></div>
              <br>
              <!--  -->
              <p>Address: 4th Floor, Administration Building, No. 1 University Road, Puli Town, Nantou County, 545</p> 
              <p>Tel: 886-49-2910960 ext. 2230~2233</p>
              <p>Hotline: 886-49-2918305</p>
              <p>Fax: 886-49-2913784</p>
              <p>EMAIL: admission@ncnu.edu.tw</p>
              
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>

    <!-- Google Translate -->
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  </body>
</html>