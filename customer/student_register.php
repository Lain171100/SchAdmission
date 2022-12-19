<?php

    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header.php');

    if(isset($_POST['btnsave']))
    {
        $txtsid=$_POST['txtsid'];
        $txtsname=$_POST['txtsname'];
        $txtsemail=$_POST['txtsemail'];
        $txtspassword=md5($_POST['txtspassword']);

        //  --- Check Duplicate Email --- //
        $checkemail="SELECT * FROM stu
                     WHERE semail='$txtsemail' ";
        $query=mysqli_query($connection,$checkemail);
        $count=mysqli_num_rows($query);

        if($count!=0)
        {
            echo "<script>window.alert('Email Already Exists')</script>";
            echo "<script>window.location='student_register.php'</script>";
            exit();
        }

        // --- Insert Data --- //
        $insert="INSERT INTO stu(sid,sname,semail,spassw)
                 VALUES ('$txtsid','$txtsname','$txtsemail','$txtspassword')";
        
        $query=mysqli_query($connection,$insert);

        if($query)
        {
            echo "<script>window.alert('Student Account Successfully Created')</script>";
            echo "<script>window.location='student_login.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong" .mysqli_error($connection) ."</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

</head>
<body>
    
<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student Register</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="student_register.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                         <input class="form-control" name="txtsid" value="<?= AutoID('stu','sid','SID-',4) ?>" readonly>
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Student Name:</label>
                        <input class="form-control" type="text" name="txtsname" value="" placeholder="Enter Your Name" required>
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Student Email:</label>
                        <input class="form-control" type="email" name="txtsemail" value="" placeholder="name@example.com" required>
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Student Email Password:</label>  
                        <input class="form-control" type="password" name="txtspassword" value="" placeholder="Enter Your Password" required>
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                        <button class="filled-button" type="submit" name="btnsave" >Save</button>
                        <button class="filled-button" type="reset" name="btncancel" onclick="location.href='student_login.php'">Cancel</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

  
</form>

</section>

<!-- form section ends -->

</body>
</html>

<?php
    include('footer.php');
?>  