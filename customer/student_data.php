<?php
    session_start();
    
    include('connect.php');
    include('autoid_functions.php');
    include('../admin/teacher_header.php');

    if (isset($_SESSION['staffid']))
    {
        $staffid=$_SESSION['staffid'];

        $query= "SELECT * FROM staff s, stafftype st
              WHERE s.stafftypeid=st.stafftypeid 
              AND s.staffid='$staffid'";
        $sql=mysqli_query($connection, $query);
        $arr=mysqli_fetch_array($sql);

        $stafftype=$arr['stafftype'];
        
    }

    ?>

<html>
<body>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css">
    

    <legend align="center"><h1>Student Data</h1></legend>

    <!-- Insert -->
    <!-- <div>
        <a href="student_insert.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Student Registration Form</a>  <br><br>
    </div>  -->
    <!--  -->
    <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name (Chinese)</th>
                    <th scope="col">Student Name (English)</th>
                    <th scope="col">Passport No</th>
                    <th scope="col">Nationality</th>
                    <!-- <th scope="col">Customer Password</th> -->
                    <th scope="col">Gender</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                <!-- </tr>
                <tr> -->
                    <th scope="col">Phone No</th>
                    <th scope="col">Legal Gurdian Name</th>
                    <th scope="col">Relationship with <br> Legal Gurdian</th>
                    <th scope="col">Address of <br> Legal Gurdian</th>
                    <th scope="col">Phone Number of <br> Legal Gurdian</th>
                    <th scope="col">Name of Taiwan's Citizen</th>
                    <th scope="col">Relationship with Taiwan's Citizen</th>
                    <th scope="col">Address with Taiwan's Citizen</th>
                    <th scope="col">Phone Number of Taiwan's Citizen</th>
                    <th scope="col">ROC or not</th>
                    <?php

                    if ($stafftype=="Staff")
                    {
                    ?>
                     <!-- <th scope="col">Actions</th> -->
                    <?php
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql="SELECT * FROM student";
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);
                        $stuid=$rows['stuid'];
                        $stuCname=$rows['stuCname'];
                        $stuEname=$rows['stuEname'];
                        $passno=$rows['passno'];
                        $nationality=$rows['nationality'];
                        $sex=$rows['sex'];
                        $marital=$rows['marital'];
                        $dob=$rows['dob'];
                        $address=$rows['address'];
                        $email=$rows['email'];
                        $phno=$rows['phno'];
                        $lename=$rows['lename'];
                        $lerelation=$rows['lerelation'];
                        $leaddress=$rows['leaddress'];
                        $lephno=$rows['lephno'];
                        $ctname=$rows['ctname'];
                        $ctrelation=$rows['ctrelation'];
                        $ctaddress=$rows['ctaddress'];
                        $ctphno=$rows['ctphno'];
                        $roc=$rows['roc'];
                        // $customerpassword=$rows['customerpassword'];

                        echo "<tr>";
                        
                        echo "<th scope='row'>". ($i+1) ."</th>";
                        echo "<td>$stuid</td>";
                        echo "<td>$stuCname</td>";
                        echo "<td>$stuEname</td>";
                        echo "<td>$passno</td>";
                        echo "<td>$nationality</td>";
                        echo "<td>$sex</td>";
                        echo "<td>$marital</td>";
                        echo "<td>$dob</td>";
                        echo "<td>$address</td>";
                        echo "<td>$email</td>";
          
                        echo "<td>$phno</td>";
                        echo "<td>$lename</td>";
                        echo "<td>$lerelation</td>";
                        echo "<td>$leaddress</td>";
                        echo "<td>$lephno</td>";
                        // echo "<td>$customerpassword</td>";
                        echo "<td>$ctname</td>";
                        echo "<td>$ctrelation</td>";
                        echo "<td>$ctaddress</td>";
                        echo "<td>$ctphno</td>";
                        echo "<td>$roc</td>";
                        
                       if ($stafftype=="Staff")
                        {
                            

                        }
                        // echo "<td>
                        //             <a href='student_update.php?stuid=$stuid' class='btn btn-outline-info'>Update</a> <br>
                        //             <br>
                        //             <a href='student_delete.php?stuid=$stuid' class='btn btn-outline-danger'>Delete</a>
                        //         </td>";

                            echo "</tr>";
                        
                        
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

