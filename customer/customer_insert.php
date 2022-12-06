<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('../admin/teacher_header.php');

    if(isset($_POST['btnsave']))
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

        // $txtcuspassword=md5($_POST['txtcuspassword']);


        //  --- Check Duplicate Email --- //
        $checkemail="SELECT * FROM student
                     WHERE email='$txtemail' ";
        $query=mysqli_query($connection,$checkemail);
        $count=mysqli_num_rows($query);

        if($count!=0)
        {
            echo "<script>window.alert('Email Already Exists')</script>";
            echo "<script>window.location='customer_insert.php'</script>";
            exit();
        }

        // --- Insert Data --- //
        $insert="INSERT INTO student(stuid, stuCname, stuEname, passno, nationality, sex, marital, dob, address, email, phno, lename, lerelation, leaddress, lephno, ctname, ctrelation, ctaddress, ctphno, roc)
                 VALUES ('$txtstuid', '$txtstuCname', '$txtstuEname', '$txtpassno', '$txtnationality', '$gender', '$status', '$txtdate', '$txtaddress', '$txtemail', '$txtphno', '$txtlename', '$txtlerelation', '$txtleaddress', '$txtlephno', '$txtctname', '$txtctrelation', '$txtctaddress', '$txtctphno', '$rdo')";
        
        $query=mysqli_query($connection,$insert);

        if($query)
        {
            echo "<script>window.alert('Student Data Successfully')</script>";
            echo "<script>window.location='student_data.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong" .mysqli_error($connection) ."</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css">

</head>
<body>

   
    <!-- form section starts  -->

    <section class="contact" id="contact">

    <h1 class="heading"> <span>Student</span> Registration </h1>

    <form action="customer_insert.php" method="POST" enctype="multipart/form-data">
   
    <!-- chinese name is not required -->


     <h1 class="heading">Enter Student's Personal Informations</h1>

        <!-- Student ID -->
        <div>
            <label for=""><b>Student ID</b></label>
            <input type="text" class="form-control"  name="txtstuid" id="" value="<?= AutoID('student','stuid','STU-',4) ?>" readonly>
        </div>
        <!-- Name For Chinese -->
        <div>
            <label for="">Full Name (Chinese):</label>
            <input type="text" class="form-control"  name="txtstuCname" value="" placeholder="Enter Chinese Name">
        </div>

        <!-- Name For English -->
        <div>
            <label for="">Full Name (English):</label>
            <input type="text" class="form-control"  name="txtstuEname" value="" placeholder="Enter English Name" required>
        </div>

        <!-- Passport No -->
        <div>
            <label for="">Passport No:</label>
            <input type="text" class="form-control"  name="txtpassno" value="" placeholder="Enter Passport Number" required>
        </div>
            
        <!-- Nationality -->
        <div>
            <label for="">Nationality:</label>
            <input type="text" class="form-control"  name="txtnationality" value="" placeholder="Enter Nationality" required>
        </div>

        <!-- Sex -->
        <div>
            <label for=""><b>Choose Gender:</b></label>
        </div>
        <div>
            <label for="">Male:</label>
            <input type="radio" name="gender" value="Male">
            <label for="">Female:</label>
            <input type="radio" name="gender" value="Female">
            <label for="">Other:</label>
            <input type="radio" name="gender" value="Other">
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
            <input type="date" class="form-control" name="txtdate" value="" required>
        </div>

        <!-- Address -->
        <div>
            <label for=""><b>Address</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtaddress" value="" placeholder="Enter Address" required>
        </div>

        <!-- Email -->
        <div>
            <label for=""><b>Email Address</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtemail" value="" placeholder="example@email.com" required>
        </div>
            
        <!-- Phone Number -->
        <div>
            <label for=""><b>Phone Number</b></label>
        </div>
        <div>
            <input type="text" class="form-control" name="txtphno" value="" placeholder="09*********" required>
        </div>

        <!-- Legal Guardian -->
        <div>
            <label for=""><b>Legal Guardian</b></label>
        </div>
        <div>
            <label for="">Name:</label>
            <input type="text" class="form-control" name="txtlename" value="" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Relationship</label>
            <input type="text" class="form-control" name="txtlerelation" value="" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Address:</label>
            <input type="text" class="form-control" name="txtleaddress" value="" placeholder="Enter Address" required>
        </div>
        <div> 
            <label for="">Telephone No</label>
            <input type="text" class="form-control" name="txtlephno" value="" placeholder="09*********" required>
        </div>

        <!-- Contact Person in Taiwan -->
        <div>
            <label for=""><b>Contact Person in Taiwan </b></label>
        </div>
        <div>
            <label for="">Name:</label>
            <input type="text" class="form-control" name="txtctname" value="" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Relationship</label>
            <input type="text" class="form-control" name="txtctrelation" value="" placeholder="Enter Gurdian Name" required>
        </div>
        <div> 
            <label for="">Address:</label>
            <input type="text" class="form-control" name="txtctaddress" value="" placeholder="Enter Address" required>
        </div>
        <div> 
            <label for="">Telephone No</label>
            <input type="text" class="form-control" name="txtctphno" value="" placeholder="09*********" required>
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
            <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='student_data.php' ">
        </div>
    </form>

    </section>

    <!-- form section ends -->

</body>
</html>
