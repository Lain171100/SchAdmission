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
          <a class="navbar-brand" href="home_page.php"><h2>NCNU <em>國立暨南國際大學</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home_page.php">Home
                  <span class="sr-only">(current)</span>
              </a>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About </a>
              </li>
              </li> 

              <li class="nav-item">
                <a class="nav-link" href="departments.php">Departments</a>
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
            <h2>National ChiNan University</h2>
            
            <a class="filled-button" href="student_login.php">Go To Admission</a>

          </div>
        </div>
        <!-- Banner 2 -->
        <div class="banner-item-02">
          <div class="text-content">
            <h2>National ChiNan University</h2>
            
            <a class="filled-button" href="student_login.php">Go To Admission</a>

          </div>
        </div>
        <!-- Banner 3 -->
        <div class="banner-item-03">
          <div class="text-content">
            <h2>National ChiNan University</h2>
            
            <a class="filled-button" href="student_login.php">Go To Admission</a>

          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

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
    
    <!-- About Us -->
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About National ChiNan University</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Words from the President</h4>
              <p>I hope to establish a university that focuses on modernity and well-being. Whether teaching, research, or governance, I would ensure that the university can keep up with global trends and align with international standards. In addition, faculties and students can access abundant resources to explore novel ideas, innovate across regions, and connect with industries. The aim is to improve the well-being of human beings through the provision of cross-disciplinary knowledge, and through actions that enhance education and deeply cultivate assets that will transform the future society. I look forward to welcoming you to the university.</p>
              <p>Dr. Dong-Sing Wuu,the 8th President of National Chi Nan University</p>
              <a href="aaaaboutus.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about.jpg" alt="" height="200px">
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
              <p>National ChiNan University</p>
              <!-- Google Translate -->
              <div id="google_translate_element"></div>
              <!--  -->
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


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

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
