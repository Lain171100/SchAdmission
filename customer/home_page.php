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

      /* foreign alumni */
      .thumb-container img{
        height:250px;
      }

      .hover-content p{
        color:white;
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


    <!-- Departments Start Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>List of Departments</h2>
              <a href="departments.php">View All Departments &nbsp;  <i class="fa fa-angle-right"></i></a>
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
              <a href="aboutus.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about.jpg" alt="" height="400px">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Team Member -->
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Foreign Alumni</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/user3.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <p>NCNU's Chinese language and literature course helped me improve my Chinese language skills tremendously, allowing me to fully integrate into the Chinese-only learning environment. Besides the beautiful scenery, NCNU also has beautiful and friendly people. The teachers and classmates are very kind to international students.</p>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Hyakuai Nahao</h4>
                <span>Japan</span>
                <p>2017-2020</p>
                <ul class="stars">
                  <li>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/user2.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <p>NCNU offers a panoramic view of nature, which I enjoy very much. NCNU has made it possible for me to pursue my PhD here, by offering me a good scholarship and alleviating my financial worries.</p>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Lokesh Bettada</h4>
                <span>India</span>
                <p>2022-Current</p>
                <ul class="stars">
                  <li>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/user1.jpg" alt="" width="50px">
                <div class="hover-effect">
                  <div class="hover-content">
                    <p>The topic of my thesis is the determinant of China’s direct investment in Russia – an empirical test. I came to NCNU to study because of the recommendation of a senior NCNU student from my hometown. My schoolmates took great care of me and helped me adapt to everything here quickly.</p>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Shmeleva Tatiana Olegovna</h4>
                <span>Russia</span>
                <p>2019-2020</p>
                <ul class="stars">
                  <li>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </li>
                </ul>
              </div>
            </div>
          </div>
          
          


        </div>
      </div>
    </div>

    
    <!-- Videos -->
    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Videos About University</h2>
            </div>
          </div>
          <!-- Videos -->
          <div class="col-md-12">
          <div class="row">
          <div class="col-md-4">
            <iframe width="350" height="300" src="https://www.youtube.com/embed/ex-2SjBY_Ic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-md-4">
            <iframe width="350" height="300" src="https://www.youtube.com/embed/l7chsv_egRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-md-4">
            <iframe width="350" height="300" src="https://www.youtube.com/embed/iVlfvB0PYl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
