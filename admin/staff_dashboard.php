<?php

    session_start();
    include('connect.php');
    include('autoid_functions.php'); 
    
    if(isset($_SESSION['staffid'])) 
    {
        $staffid = $_SESSION['staffid'];

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
    <title>National ChiNan University Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <!-- <span class="ti-cup"></span>  -->
                <span>NCNU (國立暨南國際大學)</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../admin/staff_dashboard.php">
                        <span class="ti-home"></span>
                        <span><?php echo $stafftype ?>  Home</span>
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
                        <span class="ti-ruler-pencil"></span>
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
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span></span>
                <input>
            </div>
            
            <div class="social-icons">
                <span><?= $_SESSION['staffname'] ?><br>Staff</span> <br>
                <span><a href="logout.php" role="button">
                        Logout 
                        </a>  
                </span>

                <div>
                    <img src="<?= $_SESSION['staffimage'] ?>" width="40px" height="40px" alt="" style="clip-path:circle();">

                </div>
                
            </div>
        </header>
        
        <main>
            
             <h2 class="dash-title">Overview</h2>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-user"></span>
                        <div>
                            <h5>Total Amount of Students</h5>
                            <h4>
                                <?php
                                    $sql="SELECT stuid FROM student 
                                            ORDER BY stuid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/student_data.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-write"></span>
                        <div>
                            <h5>Total of Student's Education Background</h5>
                            <h4>
                                <?php
                                    $sql="SELECT eid FROM eduback
                                          ORDER BY eid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/eduback_data.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-ruler-pencil"></span>
                        <div>
                            <h5>Total of Student's Chinese Proficiency Data</h5>
                            <h4>
                                <?php
                                    $sql="SELECT staffid FROM staff 
                                            ORDER BY staffid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    $sql="SELECT cid FROM c_language
                                          ORDER BY cid ";
                                    $query=mysqli_query($connection,$sql);

                                    $rows=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$rows.'</h2>';

                                    
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/chinesepro_data.php">View all</a>
                    </div>
                </div>
            </div>
           <h2 class="dash-title"></h2>
            
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-blackboard"></span>
                        <div>
                            <h5>Total of Student's Choosing Program</h5>
                            <h4>
                                <?php
                                    $sql="SELECT pid FROM program 
                                        ORDER BY pid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/program_data.php">View all</a>
                    </div>
                </div>
                
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-medall"></span>
                        <div>
                            <h5>Total of Student's Applying Scholar & Financial Statement</h5>
                            <h4>
                                <?php
                                    $sql="SELECT slid FROM scholar 
                                        ORDER BY slid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/scholar_data.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-book"></span>
                        <div>
                            <h5>Total of Student's Documentation Upload</h5>
                            <h4>
                                <?php
                                    $sql="SELECT did FROM doc_submit 
                                        ORDER BY did ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../customer/docsubmit_data.php">View all</a>
                    </div>
                </div>
            </div>
            
            
            <section class="recent">

                </div>
            </section>
            
        </main>
        
    </div>
    
    <div align="center">@ National ChiNan University</div>

</body>
</html>