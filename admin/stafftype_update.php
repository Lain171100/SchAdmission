<?php
    include('connect.php');

    if(isset($_GET['stafftypeid']))
    {
        $data=$_GET['stafftypeid'];

        $sql="SELECT * FROM stafftype
              WHERE stafftypeid='$data' ";

        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);

    }
    
    if(isset($_POST['btnupdate']))
    {
        $txtstid=$_POST['txtstid'];
        $txtstye=$_POST['txtstye'];

        $update="UPDATE stafftype
                 SET stafftype='$txtstye' 
                 WHERE stafftypeid='$txtstid' ";
        
        if(mysqli_query($connection,$update))
        {
            echo "<script>alert('Update Successfully')</script>";
            echo "<script>window.location='stafftype_table.php'</script>";
        }
        else{
            echo mysqli_error($connection);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Type Update</title>

</head>
<body>
    <!-- stafftypeid, stafftype / txtstid, txtstype-->

    <form action="stafftype_update.php" method="POST" enctype="multipart/form-data">
    <legend align="center">Update Staff Type Information</legend>
    
    <div>
        <input type="hidden" name="txtstid" value="<?= $count['stafftypeid'] ?>">
    </div>
        
    <div>
        <label for="stafftype">Staff Type:</label>
        <input class="form-control" type="text" name="txtstye" value="<?= $count['stafftype'] ?>" placeholder="Type Staff Role" required>
    </div>

    <div align="center">
        <input class="btn btn-info" type="submit" name="btnupdate" value="Update">
        <input class="btn btn-danger" type="reset" name="btnreset" value="Cancel" onclick="location.href='stafftype_update.php' ">
    </div>

    </form>
</body>
</html>