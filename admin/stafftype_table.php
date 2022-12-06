<?php
    include('connect.php');
    include('autoid_functions.php');
  
    include('admin_header.php');


    if(isset($_POST['btnsave']))
    {
        $txtstid=$_POST['txtstid'];
        $txtstye=$_POST['txtstye'];

        $sql="INSERT INTO stafftype (stafftypeid,stafftype)
              VALUES ('$txtstid','$txtstye')";
        $ret=mysqli_query($connection,$sql);
        if($ret)
        {
            echo"<script>window.alert('Staff Type Successfully Created')</script>";
        }
        else{
            echo "<p> Something Went Wrong" . mysqli_error($connection) . "</p>";
        }

    }

?>


<html>
    
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Data Table -->
        <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>
	    <script type="text/javascript" src="DataTable/datatables.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>
    <!-- Data Table Table -->
    <legend align="center">Staff Type Data</legend>

    <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	</script>

    <div>
        <a href="stafftype_insert.php" class="btn btn-outline-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Staff Type Form</a> 
        <br><br>
    </div>

    <table class="table table-hover" >
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Staff Type ID</th>
                <th scope="col">Staff Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql="SELECT * FROM stafftype";
                $ret=mysqli_query($connection,$sql);
                $count=mysqli_num_rows($ret);

                for($i=0; $i<$count; $i++)
                {
                    $rows=mysqli_fetch_array($ret);
                    $stafftypeid=$rows['stafftypeid'];
                    $stafftype=$rows['stafftype'];
                    
                    echo "<tr>";
                    echo "<th scope='row'>". ($i+1) ."</th>";
                    echo "<td>$stafftypeid</td>";
                    echo "<td>$stafftype</td>";
                    
                    echo "<td>
                          <a href='stafftype_update.php?stafftypeid=$stafftypeid' class='btn btn-outline-info'>Update</a> &nbsp;
                          <a href='stafftypedelete.php?stafftypeid=$stafftypeid' class='btn btn-outline-danger'>Delete</a>
                          </td>";

                    echo "</tr>";
                }
            ?>
        
        </tbody>
    </table>

    <!--  -->
</body>
</html>


