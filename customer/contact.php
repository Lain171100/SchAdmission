<?php
  session_start();
    include('connect.php');
    include('autoid_functions.php');
    

  if (isset($_SESSION['sid'])) 
	{
		$sid=$_SESSION['sid'];
		$query="SELECT * FROM stu 
                WHERE sid='$sid' " ;
		$result=mysqli_query($connection,$query);
		$arr=mysqli_fetch_array($result);
	}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>NCNU Website</title>

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
                <li class="nav-item">
                  <a class="nav-link" href="home_page.php">Home
                </a>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About </a>
                </li>
                </li> 

                <li class="nav-item">
                  <a class="nav-link" href="departments.php">Departments</a>
                </li>
                
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact </a>
                  <span class="sr-only">(current)</span>
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


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
        <!-- Google Map  -->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.3110809234317!2d120.93548844996201!3d23.949437486985715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468d82386bbae73%3A0xf8104b6caf56bdae!2sNational%20Chi%20Nan%20University!5e0!3m2!1sen!2stw!4v1670766063769!5m2!1sen!2stw" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>Address: 4th Floor, Administration Building, No. 1 University Road, Puli Town, Nantou County, 545
              <br>Tel: 886-49-2910960 ext. 2230~2233
              <br>Hotline: 886-49-2918305
              <br>Fax: 886-49-2913784
              <br>EMAIL: admission@ncnu.edu.tw</p>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/ncnu.tw"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/@NCNUTW/"><i class="fa fa-youtube"></i></a></li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-10">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>Frequently Asked Questions (FAQ)</a>
                  <div class="content">
                      <p>When is the Application Period?</p>
                      <p>For More Detail, Please refer to this link <a href="https://rpage.ncnu.edu.tw/p/404-1000-6780.php?Lang=en">See Detail</a></p>
                  </div>
              </li>
              <li>
                  <a>Second Title Here</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
              <li>
                  <a>Accordion Title Three</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
              <li>
                  <a>Fourth Accordion Title</a>
                  <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>-->
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
