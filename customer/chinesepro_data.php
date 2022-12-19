<?php

    include('connect.php');
    include('autoid_functions.php'); 
    include('../admin/teacher_header.php');


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

        <legend align="center">Chinese Proficiency Test Lists</legend>
    
        
        <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	    </script>

        <!-- <div>
        <a href="chinesepro.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Chinese Proficiency Form</a>  <br><br>
        </div>      -->

        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Chinese Proficiency ID</th>
                    <th scope="col">How Long Have You Studied Chinese?</th>
                    <th scope="col">Organization or Place Where You Studied Chinese?</th>
                    <th scope="col">Listening</th>
                    <th scope="col">Speaking</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">Reading</th>
                    <th scope="col">Writing</th>
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
                    $sql="SELECT * FROM c_language" ;
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $cid=$rows['cid'];
                        $ctime=$rows['ctime'];
                        $cplace=$rows['cplace'];
                        $listening=$rows['listening'];
                        $speaking=$rows['speaking'];
                        $reading=$rows['reading'];
                        $writing=$rows['writing'];


                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$cid</td>";
                        echo "<td>$ctime</td>";
                        echo "<td>$cplace</td>";
                        echo "<td>$listening</td>";
                        echo "<td>$speaking</td>";
                        // echo "<td>$staffpassword</td>";
                        echo "<td>$reading</td>";
                        echo "<td>$writing</td>";

                        if ($stafftype=="Staff")
                        {
                        echo "<td>
                                <a href='chinesepro_update.php?cid=$cid' class='btn btn-outline-info'>Update</a> <br><br>                            
                                <a href='chinesepro_delete.php?cid=$cid' class='btn btn-outline-danger'>Delete</a>
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

 