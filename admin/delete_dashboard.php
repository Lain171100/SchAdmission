<?php

    session_start();
    include('connect.php');
    
    if(isset($_SESSION['staffid'])) 
    {
        $staffid = $_SESSION['staffid'];

        $sql="SELECT * from staff
                WHERE staffid='$staffid'";

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
    <title> Admin Page</title>

</head>
<body>
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
                <span>National ChiNan Unversity</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php">
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
                <li>
                    <a href="searchstaff.php">
                        <span class="ti-search"></span>
                        <span>Search</span>
                    </a>
                </li>   
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <!-- <div class="search-wrapper">
                <span></span>
                <input>
            </div> -->
            
            <div class="social-icons">
                <span><?= $_SESSION['staffname'] ?><br>Admin</span> <br>
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
                        <span class="ti-agenda"></span>
                        <div>
                            <h5>Total Amount of Staffs</h5>
                            <h4>
                                <?php
                                    $sql="SELECT staffid FROM staff 
                                            ORDER BY staffid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="staff_table.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-face-smile"></span>
                        <div>
                            <h5>Total of Staff Roles</h5>
                            <h4>
                                <?php
                                    $sql="SELECT stafftypeid FROM stafftype
                                          ORDER BY stafftypeid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row.'</h2>';
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="stafftype_data.php">View all</a>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Total Staff & Staff Roles</h5>
                            <h4>
                                <?php
                                    $sql="SELECT staffid FROM staff 
                                            ORDER BY staffid ";
                                    $query=mysqli_query($connection,$sql);

                                    $row=mysqli_num_rows($query);

                                    $sql="SELECT stafftypeid FROM stafftype
                                          ORDER BY stafftypeid ";
                                    $query=mysqli_query($connection,$sql);

                                    $rows=mysqli_num_rows($query);

                                    echo '<h2> Total = '.$row+$rows.'</h2>';

                                    
                                ?>
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="searchstaff.php">View all</a>
                    </div>
                </div>
            </div>
            
            
            <section class="recent">

                </div>
            </section>
            
        </main>
        
    </div>
    
    <!-- <div align="center">Copyright @ reserved </div> -->

</body>
</html>