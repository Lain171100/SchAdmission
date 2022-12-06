<?php
    
    include('connect.php');
    include('admin_header.php');

    if(isset($_GET['staffid']))
    {
        $staffid=$_GET['staffid'];

        $sql="SELECT * FROM staff s, stafftype sr
              WHERE s.stafftypeid=sr.stafftypeid
              AND staffid='$staffid' ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);

        

    }

    if(isset($_POST['btnupdate']))
    {
        $txtsid=$_POST['txtsid'];
        $txtstaffname=$_POST['txtstaffname'];
        
        $cborole=substr($_POST['cborole'],0,9);
        $txtemail=$_POST['txtemail'];
        $txtaddress=$_POST['txtaddress'];
        $txtphnumber=$_POST['txtphnumber'];

        $update="UPDATE staff
                 SET staffname='$txtstaffname',
                     stafftypeid='$cborole',
                     staffemail='$txtemail',
                     staffaddress='$txtaddress',
                     staffphnumber='$txtphnumber'
                 WHERE staffid='$txtsid' ";
        $query=mysqli_query($connection,$update);
        if($query)
        {
            echo "<script>window.alert('Staff Data is Updated')</script>";
            echo "<script>window.location='staff_table.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Staff Update".mysqli_error($connection)."</p>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Update</title>
    <!-- Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- staffid, staffname, staffroleid, staffemail, staffpassword, staffaddress, staffphnumber, staffimage -->

    <form action="staff_update.php" method="POST" enctype="multiplepart/form-data">

        <legend align="center">Enter Staff Update Information :</legend>
        
        <div>
            <input type="hidden" name="txtsid" value="<?= $count['staffid'] ?>" readonly>
        </div>
        
        <div>
            <label for="">Staff Name:</label>
            <input class="form-control" type="text" name="txtstaffname" value="<?= $count['staffname'] ?>" placeholder="Enter Your Name" required>
        </div>
  
        <div>
            <label for="">Staff Role:</label>
            <select name="cborole" class="custom-select" value="<?= $count['stafftypeid'] ?>">
                <option value='$stafftypeid'><?= $count['stafftypeid']. "~". $count['stafftype'] ?></option>
                    <?php
                        $srolesql="SELECT * FROM stafftype";
                        $srolequery=mysqli_query($connection,$srolesql);
                        $srolecount=mysqli_num_rows($srolequery);

                        for($i=0; $i<$srolecount; $i++)
                        {
                            $arr=mysqli_fetch_array($srolequery);
                            $stafftypeid=$arr['stafftypeid'];
                            $stafftype=$arr['stafftype'];
                            $strid=$count['stafftypeid'];
                            
                            if($strid!=$stafftypeid)
                            {
                                echo "<option value='$stafftypeid'> $stafftypeid ~ $stafftype </option>";
                            }

                        }

                    ?>

            </select>
        </div>

        <div>
            <label for="">Email:</label>
            <input class="form-control" type="email" name="txtemail" value="<?= $count['staffemail'] ?>" placeholder="name@email.com" required>
        </div>

        <div>
            <label for="">Address:</label>
            <input class="form-control" type="text" name="txtaddress" value="<?= $count['staffaddress'] ?>"></input>
        </div>

        <div>
            <label for="">Phone Number:</label>
            <input class="form-control" type="text" name="txtphnumber" pattern="^[0-9]{10,12}$" value="<?= $count['staffphnumber'] ?>" placeholder="Enter Your Phone Number" required>
        </div>
        
        <br>
        <div>
            <input class="btn btn-info" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='staff_table.php' ">
        </div>

    </form>
</body>
</html>


