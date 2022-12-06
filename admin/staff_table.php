<?php
   
    include('connect.php');
    include('autoid_functions.php'); 
    include('admin_header.php');


    if(isset($_POST['btnsave']))
    {   
        $txtsid=$_POST['txtsid'];
        $txtstaffname=$_POST['txtstaffname'];
        $cborole=$_POST['cborole'];
        $txtemail=$_POST['txtemail'];
        $txtpassword=md5($_POST['txtpassword']);
        $txtaddress=$_POST['txtaddress'];
        $txtphnumber=$_POST['txtphnumber'];

        
    // --- Check Staff Image is Saved or Not --- //
        $image=$_FILES['txtstaffimage']['name'];
        $folder="staffimages/";
        if($image)
        {
            $filename=$folder."_".$image;
            $copied=copy($_FILES['txtstaffimage']['tmp_name'],$filename);

            if(!$copied)
            {
                echo "<p>Cannot Upload Photo</p>";
                exit();
            }
        }
  

        // --- Check Duplicate Email --- //
        $checkemail="SELECT * FROM staff
                    WHERE staffemail='$txtemail' ";
        $query=mysqli_query($connection,$checkemail);
        $count=mysqli_num_rows($query);

        if($count!=0)
        {
            echo "<script>window.alert('Staff Email Already Exist.')</script>";
            echo "<script>window.location='staffregister.php'</script>";
            exit();
        }


    // --- Insert Staff Data to Staff Table --- //
        $query="INSERT INTO staff (staffid,staffname,stafftypeid,staffemail,staffpassword,staffaddress,staffphnumber,staffimage)
                VALUES ('$txtsid','$txtstaffname','$cborole','$txtemail','$txtpassword','$txtaddress','$txtphnumber','$filename')";
        $result=mysqli_query($connection,$query);
        
        if($result)
        {
            echo "<script>window.alert('Staff Data Successfully Created.')</script>";
            
        }
        else
        {
            echo "<p>Something went wrong in Staff Insert " . mysqli_error($connection) . "</p>";
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

        <legend align="center">Staff Data Lists</legend>

        <!-- Table Code -->
        <script>
		$(document).ready( function ()
		{
		    $('#tableid').DataTable();
		} );
	    </script>

        <div>
        <a href="staffregister.php" class="btn btn-outline-primary"><img src="https://img.icons8.com/ios/25/000000/plus--v1.png"/>  Staff Form</a>  <br><br>
        </div>     
        
        <div class="table-responsive">
        <table align="center" id="tableid" cellspacing="5px" cellpadding="5px" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Staff ID</th>
                    <th scope="col">Staff Name</th>
                    <th scope="col">Staff Role</th>
                    <th scope="col">Staff Email</th>
                    <!-- <th scope="col">Staff Email Password</th> -->
                    <th scope="col">Staff Adddress</th>
                    <th scope="col">Staff Ph Number</th>
                    <th scope="col">Staff Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql="SELECT *
                          FROM staff s, stafftype st
                          WHERE s.stafftypeid=st.stafftypeid";
                    
                    $query=mysqli_query($connection,$sql);
                    $count=mysqli_num_rows($query);

                    for($i=0; $i<$count; $i++)
                    {
                        $rows=mysqli_fetch_array($query);

                        $staffid=$rows['staffid'];
                        $staffname=$rows['staffname'];
                        $stafftypeid=$rows['stafftype'];
                        $staffemail=$rows['staffemail'];
                        $staffpassword=$rows['staffpassword'];
                        $staffaddress=$rows['staffaddress'];
                        $staffphnumber=$rows['staffphnumber'];
                        $staffimage=$rows['staffimage'];

                        echo "<tr>";
                        echo "<th scope='row'>". ($i+1).  "</th>";
                        echo "<td>$staffid</td>";
                        echo "<td>$staffname</td>";
                        echo "<td>$stafftypeid</td>";
                        echo "<td>$staffemail</td>";
                        // echo "<td>$staffpassword</td>";
                        echo "<td>$staffaddress</td>";
                        echo "<td>$staffphnumber</td>";
                        echo "<td> <img src='$staffimage' width='100px' height='100px'> </td>";

                        echo "<td>
                                <a href='staff_update.php?staffid=$staffid' class='btn btn-outline-info'>Update</a> <br> <br>                             
                                <a href='staff_delete.php?staffid=$staffid' class='btn btn-outline-danger'>Delete</a>
                              </td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
       </main>
    </body>
</html>


 