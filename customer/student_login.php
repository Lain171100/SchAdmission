<?php
    session_start();
    include('header.php');
    include('connect.php');
    

    // If the students login failed for 3 times, login timer will appear.
    if (isset($_SESSION['count'])) 
	{
		$count=$_SESSION['count'];
		if ($count==3) 
		{
			echo "<script> alert('3 Times Login Failed') </script>";
			echo "<script>window.location='login_timer.php'</script>";
		}
	}

    if(isset($_POST['btnlogin']))
    {
        $txtsemail=$_POST['txtsemail'];
        $txtspassword=md5($_POST['txtspassword']);
        $txtsid=$_SESSION['txtsid'];

        $sql="SELECT * FROM stu
              WHERE semail='$txtsemail'
              AND spassw='$txtspassword'
            --   AND customerid='$txtcid'
              ";

        $query=mysqli_query($connection,$sql);
        $count=mysqli_num_rows($query);
        $arr=mysqli_fetch_array($query);

        if($count==0)
        {   
            if (isset($_SESSION['count'])) 
					
				{
					$_SESSION['count']++;

					
				}
				else
				{
					$_SESSION['count']=1;
                }
            
            echo "<script>window.alert('Email or Password is Incorrect.')</script>";
            echo "<script>window.location='student_login.php'</script>";
        }
        else
        {   
            $_SESSION['sid']=$arr['sid'];
            $_SESSION['sname']=$arr['sname'];


            echo "<script>alert('Login Successfully')</script>";
            echo "<script>window.location='student_insert.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    
<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student Log In</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="student_login.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                       <input type="email" class="form-control" name="txtsemail" placeholder="Type Email" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <input type="password" class="form-control" name="txtspassword" placeholder="Type Password" required>
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" class="filled-button" name="btnlogin"> Log In </button>
                        Don't Have an Account?<a href="student_register.php" class="btn">Register</a>
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