<?php

    include('connect.php');
    include('autoid_functions.php'); 
    include('../admin/teacher_header.php');

    if(isset($_POST['btnsave']))
    {   
        $txtpid=$_POST['txtpid'];
        $cboseason=$_POST['cboseason'];
        $cbolevel=$_POST['cbolevel'];
        $cbofirst=$_POST['cbofirst'];
        $cbosecond=$_POST['cbosecond'];
        $cbothird=$_POST['cbothird'];


    // --- Insert Program Data to Table --- //
        $query="INSERT INTO program (pid, season, edulevel, fcdep, scdep, tcdep)
                VALUES ('$txtpid','$cboseason','$cbolevel','$cbofirst','$cbosecond','$cbothird')";
        $result=mysqli_query($connection,$query);

        if($result)
        {
            echo "<script>window.alert('Program Acccount Successfully Created.')</script>";
        }
        else
        {
            echo "<p>Something went wrong in Program Data Insert " . mysqli_error($connection) . "</p>";
        }
        
    }

    


?>

<html>
    <body>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../admin/css/style.css">

        <!-- Data Table -->
        <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>
	    <script type="text/javascript" src="DataTable/datatables.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>

        <legend align="center">Program Data Lists</legend>
    
        
        <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	    </script>

        <div>
        <a href="program_insert.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Program Registration Form</a>  <br><br>
        </div>     

        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Program ID</th>
                    <th scope="col">Season</th>
                    <th scope="col">Education Level</th>
                    <th scope="col">First Choice Department</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">Second Choice Department</th>
                    <th scope="col">Third Choice Department</th>
                    <?php
                     if ($stafftype=="Staff")
                    {
                    ?>
                    <th scope="col">Actions</th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql="SELECT * FROM program";
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $pid=$rows['pid'];
                        $season=$rows['season'];
                        $edulevel=$rows['edulevel'];
                        $fcdep=$rows['fcdep'];
                        $scdep=$rows['scdep'];
                        $tcdep=$rows['tcdep'];

                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$pid</td>";
                        echo "<td>$season</td>";
                        echo "<td>$edulevel</td>";
                        echo "<td>$fcdep</td>";
                        // echo "<td>$staffpassword</td>";
                        echo "<td>$scdep</td>";
                        echo "<td>$tcdep</td>";

                        if ($stafftype=="Staff")
                        {
                        echo "<td>
                                <a href='program_update.php?pid=$pid' class='btn btn-secondary'>Update</a> <br>                              
                                <a href='program_delete.php?pid=$pid' class='btn btn-danger'>Delete</a>
                              </td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
       
    </body>
</html>

<?php
    include('footer.php');

?>

 