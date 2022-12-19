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

        <!-- Data Table -->
        <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>
	    <script type="text/javascript" src="DataTable/datatables.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>

        <legend align="center">Scholarship Data Lists</legend>
    
        
        <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	    </script>

        <!-- <div>
        <a href="scholar_insert.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Scholar Registration Form</a>  <br><br>
        </div>      -->

        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Scholar ID</th>
                    <th scope="col">Personal Savings</th>
                    <th scope="col">Parent's Savings</th>
                    <th scope="col">Scholarship's Money</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">Scholarship Organization</th>
                    <th scope="col">Health Condition</th>
                    <th scope="col">Health Problem</th>
                    <th scope="col">Apply Scholarship Status</th>
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
                    $sql="SELECT * FROM scholar";
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $slid=$rows['slid'];
                        $pmoney=$rows['pmoney'];
                        $fmoney=$rows['fmoney'];
                        $smoney=$rows['smoney'];
                        $schscholar=$rows['schscholar'];
                        $health_condi=$rows['health_condi'];
                        $health_problem=$rows['health_problem'];
                        $scholar_apply=$rows['scholar_apply'];

                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$slid</td>";
                        echo "<td>$pmoney</td>";
                        echo "<td>$fmoney</td>";
                        echo "<td>$smoney</td>";
                        echo "<td>$schscholar</td>";
                        // echo "<td>$staffpassword</td>";
                        echo "<td>$health_condi</td>";
                        echo "<td>$health_problem</td>";
                        echo "<td>$scholar_apply</td>";

                        if ($stafftype=="Staff")
                        {
                        echo "<td>
                                <a href='scholar_update.php?slid=$slid' class='btn btn-outline-info'>Update</a> <br> <br>                             
                                <a href='scholar_delete.php?slid=$slid' class='btn btn-outline-danger'>Delete</a>
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
    // include('footer.php');

?>

 