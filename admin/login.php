<?php
    session_start();
    include('connect.php');

    if(isset($_POST['btnlogin']))
    {
        $txtemail=$_POST['txtemail'];
        $txtpassword=md5($_POST['txtpassword']);

        $sql="SELECT * FROM staff s, stafftype st
              WHERE s.staffemail='$txtemail'  
              AND s.staffpassword='$txtpassword'
              AND s.stafftypeid=st.stafftypeid ";
        $query=mysqli_query($connection,$sql);
        $count=mysqli_num_rows($query);
        $arr=mysqli_fetch_array($query);

        if($count==0)
        {
            echo "<script>window.alert('Email or Password is Incorrect.')</script>";
            echo "<script>window.location='login.php'</script>";
        }
        else{
            for($i=0; $i<$count; $i++)
            {
                $role=$arr['stafftype'];

                if ($role=="Admin")
                {
                    $_SESSION['staffid']=$arr['staffid'];
                    $_SESSION['staffname']=$arr['staffname'];
                    $_SESSION['staffimage']=$arr['staffimage'];
                    $_SESSION['stafftypeid']=$arr['stafftypeid'];

                    echo "<script>alert('Login Successfully')</script>";
                    echo "<script>window.location='admin_dashboard.php'</script>";
                }
                if ($role=="Teacher")
                {
                    $_SESSION['staffid']=$arr['staffid'];
                    $_SESSION['staffname']=$arr['staffname'];
                    $_SESSION['staffimage']=$arr['staffimage'];
                    $_SESSION['stafftypeid']=$arr['stafftypeid'];

                    echo "<script>alert('Login Successfully')</script>";
                    echo "<script>window.location='teacher_dashboard.php'</script>";
                }

                if ($role=="Staff")
                {
                    $_SESSION['staffid']=$arr['staffid'];
                    $_SESSION['staffname']=$arr['staffname'];
                    $_SESSION['staffimage']=$arr['staffimage'];
                    $_SESSION['stafftypeid']=$arr['stafftypeid'];
                    
                    echo "<script>alert('Login Successfully')</script>";
                    echo "<script>window.location='staff_dashboard.php'</script>";

                }
            }

            
        }
        

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <!-- Link -->
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />
</head>

<body>
    <form action="login.php" method="POST" enctype="multipart/form-data">

        <section class="vh-100" style="background-color: #508bfc;">
        <!-- <h2 align="center">Welcome To NCNU's Admission</h2> -->
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Log in</h3>

                <div class="form-outline mb-4">
                <input type="email" name="txtemail" id="typeEmailX-2" class="form-control form-control-lg"  required />
                <label class="form-label" for="typeEmailX-2" >Email</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" name="txtpassword" id="typePasswordX-2" class="form-control form-control-lg" required />
                <label class="form-label" for="typePasswordX-2">Password</label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnlogin">Login</button>
                <button class="btn btn-danger btn-lg btn-block" type="rest" name="btncancel" onclick="location.href='../customer/home_page.php' ">Cancel</button>

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    </form>
</body>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
</html>