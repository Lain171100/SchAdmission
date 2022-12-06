<?php

    include('connect.php');
    include('autoid_functions.php');
    include('../admin/teacher_header.php');

    if(isset($_GET['stuid']))
    {
        $studentid=$_GET['stuid'];

        $sql="SELECT * FROM student
              WHERE stuid='$studentid' ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);
    }

    if(isset($_POST['btnupdate']))
    {
        $txtstuid=$_POST['txtstuid'];
        $txtstuCname=$_POST['txtstuCname'];
        $txtstuEname=$_POST['txtstuEname'];
        $txtpassno=$_POST['txtpassno'];
        $txtnationality=$_POST['txtnationality'];
        $gender=$_POST['gender'];
        $status=$_POST['status'];
        $txtdate=$_POST['txtdate'];
        $txtaddress=$_POST['txtaddress'];
        $txtemail=$_POST['txtemail'];
        $txtphno=$_POST['txtphno'];
        $txtlename=$_POST['txtlename'];
        $txtlerelation=$_POST['txtlerelation'];
        $txtleaddress=$_POST['txtleaddress'];
        $txtlephno=$_POST['txtlephno'];
        $txtctname=$_POST['txtctname'];
        $txtctrelation=$_POST['txtctrelation'];
        $txtctaddress=$_POST['txtctaddress'];
        $txtctphno=$_POST['txtctphno'];
        $rdo=$_POST['rdo'];

        // --- Update Data --- //
        $update="UPDATE student
                 SET stuCname ='$txtstuCname',
                     stuEname='$txtstuEname',
                     passno ='$txtpassno',
                     nationality='$txtnationality',
                     sex ='$gender',
                     marital='$status',
                     dob ='$txtdate',
                     address='$txtaddress',
                     email='$txtemail',
                     phno='$txtphno',
                     lename='$txtlename',
                     lerelation='$txtlerelation',
                     leaddress ='$txtleaddress',
                     lephno ='$txtlephno',
                     ctname ='$txtctname',
                     ctrelation ='$txtctrelation',
                     ctaddress ='$txtctaddress',
                     ctphno ='$txtctphno',
                     roc ='$rdo'

                 WHERE stuid='$txtstuid' ";
        
        $query=mysqli_query($connection,$update);

        if($query)
        {
            echo "<script>window.alert('Student's Data Update Successfully')</script>";
            echo "<script>window.location='student_data.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> 
</head>
<body>
    <form action="student_update.php" method="POST" enctype="multipart/form-data">
        <legend align="center">Enter Student Informations</legend>

        <!-- Student ID -->
        <div>
            <label for=""><b>Student ID</b></label>
            <input type="text" class="form-control" name="txtstuid" id="" value="<?= $count['stuid'] ?>" readonly>
        </div>
        <!-- Name For Chinese -->
        <div>
            <label for="">Full Name (Chinese):</label>
            <input type="text" class="form-control" name="txtstuCname" value="<?= $count['stuCname'] ?>" placeholder="Enter Chinese Name">
        </div>

        <!-- Name For English -->
        <div>
            <label for="">Full Name (English):</label>
            <input type="text" class="form-control" name="txtstuEname" value="<?= $count['stuEname'] ?>" placeholder="Enter English Name" required>
        </div>

        <!-- Passport No -->
        <div>
            <label for="">Passport No:</label>
            <input type="text" class="form-control" name="txtpassno" value="<?= $count['passno'] ?>" placeholder="Enter Passport Number" required>
        </div>
            
        <!-- Nationality -->
        <div>
            <label for="">Nationality:</label>
            <input type="text" class="form-control" name="txtnationality" value="<?= $count['nationality'] ?>" placeholder="Enter Nationality" required>
        </div>

        <!-- Sex -->
        <div>
            <label for=""><b>Choose Gender:</b></label>
        </div>
        <div>
            <?php if($count['sex']=="Male")
            {?>
            <label for="">Male:</label>
            <input type="radio" name="gender" value="Male" checked>
            
            <label for="">Female:</label>
            <input type="radio" name="gender" value="Female">
            <label for="">Other:</label>
            <input type="radio" name="gender" value="Other">

            <?php
            }
            ?>
            <!-- Female -->
            <?php if($count['sex']=="Female")
            {?>
            <label for="">Male:</label>
            <input type="radio" name="gender" value="Male" >
            
            <label for="">Female:</label>
            <input type="radio" name="gender" value="Female" checked>
            <label for="">Other:</label>
            <input type="radio" name="gender" value="Other">

            <?php
            }
            ?>
            <!-- Other -->
            <?php if($count['sex']=="Other")
            {?>
            <label for="">Male:</label>
            <input type="radio" name="gender" value="Male" >
            
            <label for="">Female:</label>
            <input type="radio" name="gender" value="Female" >
            <label for="">Other:</label>
            <input type="radio" name="gender" value="Other" checked>

            <?php
            }
            ?>
        </div>

        <!-- Marital Status -->
        <div>
            <label for=""><b>Choose Marital Status:</b></label>
        </div>
        <div>
            <label for="">Married:</label>
            <input type="radio" name="status" value="Married">
            <label for="">Single:</label>
            <input type="radio" name="status" value="Single">
        </div>

        <!-- D.O.B -->
        <div>
            <label for=""><b>Date of Birth</b></label>
        </div>
        <div>
            <input type="date" class="form-control" name="txtdate" value="<?= $count['dob'] ?>" required>
        </div>

        <!-- Address -->
        <div>
            <label for=""><b>Address</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtaddress" value="<?= $count['address'] ?>" placeholder="Enter Address" required>
        </div>

        <!-- Email -->
        <div>
            <label for=""><b>Email Address</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtemail" value="<?= $count['nationality'] ?>" placeholder="example@email.com" required>
        </div>
            
        <!-- Phone Number -->
        <div>
            <label for=""><b>Phone Number</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtphno" value="<?= $count['phno'] ?>" placeholder="09*********" required>
        </div>

        <!-- Legal Guardian -->
        <div>
            <label for=""><b>Legal Guardian</b></label>
        </div>
        <div>
            <label for="">Name:</label>
            <input type="text" class="form-control" name="txtlename" value="<?= $count['lename'] ?>" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Relationship</label>
            <input type="text" class="form-control" name="txtlerelation" value="<?= $count['lerelation'] ?>" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Address:</label>
            <input type="text" class="form-control" name="txtleaddress" value="<?= $count['leaddress'] ?>" placeholder="Enter Address" required>
        </div>
        <div> 
            <label for="">Telephone No</label>
            <input type="text" class="form-control" name="txtlephno" value="<?= $count['lephno'] ?>" placeholder="09*********" required>
        </div>

        <!-- Contact Person in Taiwan -->
        <div>
            <label for=""><b>Contact Person in Taiwan </b></label>
        </div>
        <div>
            <label for="">Name:</label>
            <input type="text" class="form-control" name="txtctname" value="<?= $count['ctname'] ?>" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Relationship</label>
            <input type="text" class="form-control" name="txtctrelation" value="<?= $count['ctrelation'] ?>" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Address:</label>
            <input type="text" class="form-control" name="txtctaddress" value="<?= $count['ctaddress'] ?>" placeholder="Enter Address" required>
        </div>
        <div> 
            <label for="">Telephone No</label>
            <input type="text" class="form-control" name="txtctphno" value="<?= $count['ctphno'] ?>" placeholder="09*********" required>
        </div>
        
        <!-- Citizenship -->
        <div>
            <label for="">Used to be a citizen of R.O.C or not?:</label>
            <label for="">Yes</label>
            <input type="radio" name="rdo" value="Yes">
            <label for="">No</label>
            <input type="radio" name="rdo" value="No">
        </div>
                
        <!-- Button -->
        <div>
            <input class="btn btn-primary" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='student_data.php' ">
        </div>
    </form>
</body>
</html>