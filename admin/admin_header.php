<?php
    session_start();
    include('connect.php');


    if(isset($_SESSION['staffid'])) 
    {
        $staffid=$_SESSION['staffid'];

        $sql="SELECT * FROM staff
              WHERE staffid='$staffid' ";

        $staffquery=mysqli_query($connection,$sql);
        $staffcount=mysqli_num_rows($staffquery);
        $staffarray=mysqli_fetch_array($staffquery);

    }

    if(!isset($staffid))
    { 
        echo "<script>window.location='login.php'</script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>National ChiNan University Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .sidebar-header h3 span{
            font-family: 'Poppins', sans-serif;
            font-size:1.2rem;
            font-weight:bold;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;

        }

        .sidebar a:hover {
            color: orange;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <!-- <span class="ti-unlink"></span>  -->
                <span>NCNU (國立暨南國際大學)</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin_dashboard.php">
                        <span class="ti-home"></span>
                        <span>Admin Home</span>
                    </a>
                </li>
                <li>
                    <a href="stafftype_table.php">
                        <span class="ti-agenda"></span>
                        <span>Staff Type</span>
                    </a>
                </li>
                <li>
                    <a href="staff_table.php">
                        <span class="ti-face-smile"></span>
                        <span>Staff</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="searchstaff.php">
                        <span class="ti-search"></span>
                        <span>Search</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
             <div class="search-wrapper">
                <span></span>
                <input>
            </div>
            
            <div class="social-icons" >

            <!-- Nav -->   

            <span><?= $_SESSION['staffname'] ?> <br>Admin </span> <br>
            <span>
                <a href="logout.php" role="button">Logout</a>  
            </span>

            <div>
                <img src="<?= $_SESSION['staffimage'] ?>" width="40px" height="40px" alt="" style="clip-path:circle();">

            </div>
            </div>
        </header>

    <main>
            
    <h2 class="dash-title"></h2>
    
        
</body>
</html>
