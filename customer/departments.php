<?php
  include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

    
</body>
</html>

<head>
    <!-- <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" /> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <title>NCNU Website</title>

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
              <a href="products.html">View All Departments<i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="product-item">
              <a href="https://www.csie.ncnu.edu.tw/home"><img src="assets/images/csie.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.csie.ncnu.edu.tw/home"><h4>Department of Computer Science & Information Engineering</h4></a>
                
                <p>資訊工程系成立於1996年，是台灣國立暨南國際大學最早成立的系之一。我們珍視資工CS這個大家庭（學生，助理和教授）</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.econ.ncnu.edu.tw/"><img src="assets/images/econ.jpg" alt="" ></a>
              <div class="down-content msg">
                <a href="https://www.econ.ncnu.edu.tw//"><h4>Department of Econic</h4></a>
                <p>經濟學系 (所) 隸屬於管理學院，是國立暨南國際大學最初五個創校研究所之一。</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 msg">
            <div class="product-item">
              <a href="https://ch.ncnu.edu.tw/"><img src="assets/images/foreign.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://ch.ncnu.edu.tw/"><h4>Department of Chinese as a Second Language</h4></a>
                <p>大學部非在華語地區畢業者，須檢附新版華語能力測驗（TOCFL）聽讀流利級，或其他足以說明其中文能力之證明，如修習課程證明等。</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.epa.ncnu.edu.tw/pg.asp?theme=87"><img src="assets/images/edu.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.epa.ncnu.edu.tw/pg.asp?theme=87"><h4>Department of Educational Policy and Administration</h4></a>
                <p>  教育學院於 2010 年 2 月 1 日正式成立，共設置3系1所，包括：國際文教與比較教育學系、教育政策與行政學系、諮商心理與人力資源發展學系、課程教學與科技研究所等四個系所。</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://gec.ncnu.edu.tw/"><img src="assets/images/generaledu.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://gec.ncnu.edu.tw/"><h4>Department of General Education Center</h4></a>
                <p>暨大通識教育在理念目標扣合學校發展與定位，並配合學校特色發展推動在地實踐、綠色環保、東南亞文化三大特色通識教學</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="https://www.cseas.ncnu.edu.tw/"><img src="assets/images/research.jpg" alt=""></a>
              <div class="down-content msg">
                <a href="https://www.cseas.ncnu.edu.tw/"><h4>Department of Southeast Asian Studies</h4></a>
                <p>我們著重於當代東南亞政治、經濟、社會文化及族群關係之研究，和政府政策及社會需求，提供研究發現與成果予政府</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                <!--  -->
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Products</li>
                            <li data-filter=".des">Featured</li>
                            <li data-filter=".dev">Flash Deals</li>
                            <li data-filter=".gra">Last Minute</li>
                        </ul>
                    </div>
                </div>

                <!--  -->
                
                <!--  -->
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_01.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$18.25</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (12)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_02.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$16.75</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (24)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_03.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$32.50</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (36)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all gra">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_04.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$24.60</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (48)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all dev">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_05.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$18.75</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (60)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="assets/images/product_06.jpg" alt="" /></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$12.50</h6>
                                        <p>
                                            Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.
                                        </p>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>Reviews (72)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>
                            National ChiNan University
              </p>
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
  </body>
</html>