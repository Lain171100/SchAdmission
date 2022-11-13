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
                    echo "<script>window.location='adminhomepage.php'</script>";
                }
                if ($role=="Manager")
                {
                    $_SESSION['staffid']=$arr['staffid'];
                    $_SESSION['staffname']=$arr['staffname'];
                    $_SESSION['staffimage']=$arr['staffimage'];
                    $_SESSION['staffroleid']=$arr['staffroleid'];

                    echo "<script>alert('Login Successfully')</script>";
                    echo "<script>window.location='managerhomepage.php'</script>";
                }

                if ($role=="Manager Assistance")
                {
                    $_SESSION['staffid']=$arr['staffid'];
                    $_SESSION['staffname']=$arr['staffname'];
                    $_SESSION['staffimage']=$arr['staffimage'];
                    $_SESSION['staffroleid']=$arr['staffroleid'];

                    echo "<script>alert('Login Successfully')</script>";
                    echo "<script>window.location='massistancehome.php'</script>";

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
</head>

<body>
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <h2>Welcome To NCNU's Admission</h2>
        <div>
            <label for="email">Email</label>
            <input type="email" name="txtemail" required/>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="txtpassword" required/>
        </div>

        <!-- Link -->
        <p>Haven't had an Account?</p>
        <a href="#">Create an Account</a>

        <!-- Button -->
        <input type="submit" value="Log In" name="btnlogin">
    </form>
</body>

</html>