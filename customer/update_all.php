<?php

    session_start();
    include('connect.php');
    include('autoid_functions.php'); 
    include('header_form.php');
       

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>


<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Update Data Form</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              
                <div class="row">
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='home_page.php' " class="filled-button"> Home Page </button>
                </fieldset>
                </div>

                <!-- Student's Personal Information -->
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='student_update.php' " class="filled-button"> Student's Personal Information </button>
                </fieldset>
                </div>

                <!-- Student's Education Background -->
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='eduback_update.php' " class="filled-button"> Student's Education Background </button>
                </fieldset>
                </div>

                <!-- Student's Chinese Proficiency -->
                <br><br><br>
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='chinesepro_update.php' " class="filled-button"> Student's Chinese Proficiency </button>
                </fieldset>
                </div>

                <!-- Student's Program Enrollment -->
                <br><br><br>
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='program_update.php' " class="filled-button"> Student's Program Enrollment </button>
                </fieldset>
                </div>

                <!-- Student's Scholarship and Financial Statement -->
                <br><br><br>
                <div class="col-md-4">
                <fieldset>
                    <button onclick="location.href='scholar_update.php' " class="filled-button"> Student's Scholarship and Financial Statement </button>
                </fieldset>
                </div>



                </div>
                  <!--  -->
                </div>
              

</section>

<!-- form section ends -->

</body>
</html>

<?php
    include('footer.php');
?>