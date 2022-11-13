<?php
    include('connect.php');
    include('autoid_functions.php');

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

    <!-- Data Table -->
    <legend align="center">Staff Type Data</legend>

    <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	</script>

    <div>
        <a href="stafftype_insert.php" class="btn btn-primary"><img src="https://img.icons8.com/ios/20/000000/plus--v1.png"/> Staff Type Form</a> 
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
                          <a href='stafftype_update.php?stafftypeid=$stafftypeid' class='btn btn-secondary'>Update</a>
                          <a href='stafftypedelete.php?stafftypeid=$stafftypeid' class='btn btn-danger'>Delete</a>
                          </td>";

                    echo "</tr>";
                }
            ?>
        
        </tbody>
    </table>
</body>
</html>


