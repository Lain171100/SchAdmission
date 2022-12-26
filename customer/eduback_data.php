<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php'); 
    include('../admin/teacher_header.php');
    


?>

<html>
    <body>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../admin/css/style.css">

        <legend align="center">Education Background Data Lists</legend>

        <!-- <div>
        <a href="eduback_insert.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Education Background Registration Form</a>  <br><br>
        </div>      -->

        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Education Background ID</th>
                    <th scope="col">High School Name</th>
                    <th scope="col">High School Location</th>
                    <th scope="col">Degree in High School</th>
                    <th scope="col">Date Attended in High School</th>
                    <th scope="col">Major in High School</th>
                    <th scope="col">Minor in High School</th>
                    <th scope="col">GPA in High School</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">College School Name</th>
                    <th scope="col">College School Location</th>
                    <th scope="col">College in High School</th>
                    <th scope="col">Date Attended in College School</th>
                    <th scope="col">Major in College School</th>
                    <th scope="col">Minor in College School</th>
                    <th scope="col">GPA in College School</th>
                    <!--  -->
                    <th scope="col">Master's School Name</th>
                    <th scope="col">Master's School Location</th>
                    <th scope="col">Master's in High Master's</th>
                    <th scope="col">Date Attended in College School</th>
                    <th scope="col">Major in Master's School</th>
                    <th scope="col">Minor in Master's School</th>
                    <th scope="col">GPA in Master's School</th>
                    <!--  -->
                    <th scope="col">Master's School Name</th>
                    <th scope="col">Master's School Location</th>
                    <th scope="col">Master's in High Master's</th>
                    <th scope="col">Date Attended in College School</th>
                    <th scope="col">Major in Master's School</th>
                    <th scope="col">Minor in Master's School</th>
                    <th scope="col">GPA in Master's School</th>
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
                    $sql="SELECT * FROM eduback";
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $eid=$rows['eid'];
                        $hname=$rows['hname'];
                        $hlocation=$rows['hlocation'];
                        $hdegree=$rows['hdegree'];
                        $hdate=$rows['hdate'];
                        $hmajor=$rows['hmajor'];
                        $hminor=$rows['hminor'];
                        $hgpa=$rows['hgpa'];
                        // 
                        $uname=$rows['uname'];
                        $ulocation=$rows['ulocation'];
                        $udegree=$rows['udegree'];
                        $udate=$rows['udate'];
                        $umajor=$rows['umajor'];
                        $uminor=$rows['uminor'];
                        $ugpa=$rows['ugpa'];
                        // 
                        $mname=$rows['mname'];
                        $mlocation=$rows['mlocation'];
                        $mdegree=$rows['mdegree'];
                        $mdate=$rows['mdate'];
                        $mmajor=$rows['mmajor'];
                        $mminor=$rows['mminor'];
                        $mgpa=$rows['mgpa'];
                        // 
                        $dname=$rows['dname'];
                        $dlocation=$rows['dlocation'];
                        $ddegree=$rows['ddegree'];
                        $ddate=$rows['ddate'];
                        $dmajor=$rows['dmajor'];
                        $dminor=$rows['dminor'];
                        $dgpa=$rows['dgpa'];


                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$eid</td>";
                        echo "<td>$hname</td>";
                        echo "<td>$hlocation</td>";
                        echo "<td>$hdegree</td>";
                        echo "<td>$hdate</td>";
                        echo "<td>$hmajor</td>";
                        echo "<td>$hminor</td>";
                        echo "<td>$hgpa</td>";
                        // 
                        echo "<td>$uname</td>";
                        echo "<td>$ulocation</td>";
                        echo "<td>$udegree</td>";
                        echo "<td>$udate</td>";
                        echo "<td>$umajor</td>";
                        echo "<td>$uminor</td>";
                        echo "<td>$ugpa</td>";
                        // 
                        echo "<td>$mname</td>";
                        echo "<td>$mlocation</td>";
                        echo "<td>$mdegree</td>";
                        echo "<td>$mdate</td>";
                        echo "<td>$mmajor</td>";
                        echo "<td>$mminor</td>";
                        echo "<td>$mgpa</td>";
                        // 
                        echo "<td>$dname</td>";
                        echo "<td>$dlocation</td>";
                        echo "<td>$ddegree</td>";
                        echo "<td>$ddate</td>";
                        echo "<td>$dmajor</td>";
                        echo "<td>$dminor</td>";
                        echo "<td>$dgpa</td>";

                        if ($stafftype=="Staff")
                        {
                        
                        }
                        // echo "<td>
                            //     <a href='eduback_update.php?eid=$eid' class='btn btn-outline-info'>Update</a> <br> <br>                              
                            //     <a href='eduback_delete.php?eid=$eid' class='btn btn-outline-danger'>Delete</a>
                            //   </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
       
    </body>
</html>


 