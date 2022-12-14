<?php
    session_start();
    include('connect.php');


    if(isset($_SESSION['staffid'])) 
    {
        $staffid=$_SESSION['staffid'];

        $sql="SELECT * FROM staff s, stafftype st
              WHERE s.stafftypeid=st.stafftypeid
              AND s.staffid='$staffid' ";

        $staffquery=mysqli_query($connection,$sql);
        $staffarray=mysqli_fetch_array($staffquery);
        $stafftype=$staffarray['stafftype'];

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
    <title>National ChiNan University Staff Page</title>
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
                    <a href="../admin/staff_dashboard.php">
                        <span class="ti-home"></span>
                        <span><?php echo $stafftype ?> Home</span>
                    </a>
                </li>
                <li>
                    <a href="../customer/student_data.php">
                        <span class="ti-user"></span>
                        <span>Student's Data</span>
                    </a>
                </li>
                <li>
                    <a href="../customer/eduback_data.php">
                        <span class="ti-write"></span>
                        <span>Student's Education Background</span>
                    </a>
                </li>

                <li>
                    <a href="../customer/chinesepro_data.php">
                        <span class="ti-uler-pencil"></span>
                        <span>Student's Chinese Proficiency Data</span>
                    </a>
                </li>

                <li>
                    <a href="../customer/program_data.php">
                        <span class="ti-blackboard"></span>
                        <span>Student's Program Selection</span>
                    </a>
                </li>

                <li>
                    <a href="../customer/scholar_data.php">
                        <span class="ti-medall"></span>
                        <span>Student's Scholarship and Financial</span>
                    </a>
                </li>

                 <li>
                    <a href="../customer/docsubmit_data.php">
                        <span class="ti-book"></span>
                        <span>Student's Documentation</span>
                    </a>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
             <div class="search-wrapper">
                <span></span>
                <input>
            </div>
            
            <!-- Nav -->
            <div class="social-icons">
                <span><?= $_SESSION['staffname'] ?><br>Staff</span> <br>
                <span><a href="../admin/logout.php" role="button">
                        Logout 
                        </a>  
                </span>

                <div>
                    <img src="../admin/<?= $_SESSION['staffimage'] ?>" width="40px" height="40px" alt="" style="clip-path:circle();">

                </div>
                
            </div>
        </header>

    <main>
            
    <h2 class="dash-title"></h2>
    
        
</body>
</html>
