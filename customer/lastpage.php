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
    <title>Last Page</title>
</head>
<body>


<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Form Submission Successfully!</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              
                  
                  <div class="col-lg-12">
                    <fieldset>
                        <button onclick="location.href='home_page.php' " class="filled-button"> Home Page </button>
                    </fieldset>
                  </div>
                </div>
              

</section>

<!-- form section ends -->

</body>
</html>

<?php
    include('footer.php');
?>