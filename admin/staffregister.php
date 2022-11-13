<?php
    include('connect.php');
    include('autoid_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>
</head>
<body>
    <form action="staff_table.php" method="POST" enctype="multipart/form-data">
        <legend>Enter Staff Information</legend>
            <div>
                <label for="staffid">StaffID:</label>
                <input type="text" class="form-control" name="txtsid" value="<?= AutoID('staff','staffid','SID-',4) ?>" readonly>
            </div>

            <div>
                <label for="staffname">Staff Name:</label>
                <input type="text" class="form-control" name="txtstaffname" placeholder="Enter Your Name" required>
            </div>

            <div>
                <label for="staffrole">Staff Roles:</label>
                <select name="cborole" class="custom-select" id="">
                    <?php
                        $staffrolesql="SELECT * FROM stafftype";
                        $staffrolequery=mysqli_query($connection, $staffrolesql);
                        $staffrolecount=mysqli_num_rows($staffrolequery);

                        for($i=0; $i<$staffrolecount; $i++)
                        {
                            $arr=mysqli_fetch_array($staffrolequery);
                            $stafftypeid=$arr['stafftypeid'];
                            $stafftype=$arr['stafftype'];

                            echo "<option value='$stafftypeid'> $stafftype</option>";
                        }
                    ?>
                </select>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="txtemail" placeholder="example@email.com" required>
            </div>

            <div>
                <label for="pass">Password:</label>
                <input type="password" class="form-control" name="txtpassword" placeholder="Enter Your Password" required>
            </div>

            <div>
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="txtaddress" placeholder="Enter Your Address" required>
            </div>
            
            <div>
                <label for="phno">Phone Number:</label>
                <input type="text" class="form-control" name="txtphnumber" placeholder="Enter Your Phone Number" pattern="^[0-9]{10,12}$" required>
            </div>

            <div>
                <label for="image">Image:</label>
                <input type="file" class="form-control" name="txtstaffimage" required>
            </div>
            
            <div>
                <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
                <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='staff_table.php' ">
            </div>
    </form>
</body>
</html>