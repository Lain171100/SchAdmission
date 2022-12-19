<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');

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
        $studentid=$_POST['txtstudentid'];

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
            $updatesql="UPDATE stu SET stuid='$txtstuid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Student Data Successfully Created.')</script>
                <script>window.location='eduback_insert.php'</script>";
            }
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

</head>
<body>



 <!-- Process -->
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Process Status</h2>
            </div>
          </div>
          <div class="col-md-12">
              <img src="assets/images/process_one.jpg" alt="" class="img-fluid" height="200px">
          </div>
        </div>
      </div>
    </div>


<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student Register</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="student_insert.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <!-- Student ID -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Student ID:</label>
                        <input type="text" class="form-control"  name="txtstuid" id="" value="<?= AutoID('student','stuid','STU-',4) ?>" readonly>
                    </fieldset>
                  </div>
                  
                <!-- Name For Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Full Name (Chinese):</label>
                        <input type="text" class="form-control"  name="txtstuCname" value="" placeholder="Enter Chinese Name">
                    </fieldset>
                  </div>

                <!-- Name For English -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Full Name (English):</label>
                        <input type="text" class="form-control"  name="txtstuEname" value="" placeholder="Enter English Name" required>
                    </fieldset>
                  </div>

                <!-- Passport No -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Passport No:</label>
                        <input type="text" class="form-control"  name="txtpassno" value="" placeholder="Enter Passport Number" required>
                    </fieldset>
                  </div>
                
                <!-- Nationality -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Nationality:</label>
                        <input type="text" class="form-control"  name="txtnationality" value="" placeholder="Enter Nationality" required>
                    </fieldset>
                </div>

                <!-- Sex -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Gender:</label>
                        <select name="gender" class="form-control" required>
                            <option value="">Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </fieldset>
                  </div>

                <!-- Marital Status -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Choose Marital Status:</label>
                        <select name="status" class="form-control" required>
                            <option value="">Choose Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </fieldset>
                  </div>
            
                <!-- D.O.B -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <br>
                        <label for="">Date of Birth:</label>
                        <input type="date" class="form-control" name="txtdate" value="" required>
                    </fieldset>
                </div>

                <!-- Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="txtaddress" value="" placeholder="Enter Address" required>
                    </fieldset>
                </div>

                <!-- Email -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Email Address</label>
                        <input type="text" class="form-control" name="txtemail" value="" placeholder="example@email.com" required>
                    </fieldset>
                </div>

                <!-- Phone Number -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="txtphno" value="" placeholder="09*********" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>Legal Guardian:</h4>
                        <br>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="txtlename" value="" placeholder="Enter Gurdian Name" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Relationship -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Relationship</label>
                        <input type="text" class="form-control" name="txtlerelation" value="" placeholder="Enter Gurdian Name" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="txtleaddress" value="" placeholder="Enter Address" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Telephone No -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Telephone No</label>
                        <input type="text" class="form-control" name="txtlephno" value="" placeholder="09*********" required>
                    </fieldset>
                </div>

                <!--  -->
                <!-- Contact Person In Taiwan -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>Contact Person in Taiwan:</h4>
                        <br>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="txtctname" value="" placeholder="Enter Gurdian Name" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Relationship -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Relationship</label>
                        <input type="text" class="form-control" name="txtctrelation" value="" placeholder="Enter Gurdian Name" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="txtctaddress" value="" placeholder="Enter Address" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Telephone No -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Telephone No</label>
                        <input type="text" class="form-control" name="txtctphno" value="" placeholder="09*********" required>
                    </fieldset>
                </div>

                <!-- Citizenship or Not? -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Used to be a Citizen of R.O.C or not?:</label>
                        <select name="rdo" class="form-control" required>
                            <option value="">Choose Yes or No?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </fieldset>
                  </div>
                
                <!-- Button -->
                  <div class="col-lg-12">
                    <fieldset>
                        <button type="text" name="txtstudentid" value="<?php echo $_SESSION['sid']; ?>" hidden></button>
                        <br>
                        <button class="btn btn-primary" type="submit" name="btnsave" value="Save">Save</button>
                        <button class="btn btn-danger" type="reset" name="btncancel" value="Clear" >Clear</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

  
</form>

</section>

<!-- form section ends -->


</body>
</html>

<?php
    include('footer.php');
?>
