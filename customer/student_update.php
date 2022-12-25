<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');


    if (isset($_SESSION['sid']))
    {
        $sid=$_SESSION['sid'];

        $query= "SELECT * FROM stu s, student st, eduback edu, c_language c, program p, scholar sc, doc_submit d
              WHERE s.stuid = st.stuid
              AND s.eid = edu.eid
              AND s.pid = p.pid
              AND s.cid = c.cid
              AND s.slid = sc.slid
              AND s.did = d.did
              AND s.sid ='$sid'";
        $sql=mysqli_query($connection, $query);
        $rows=mysqli_fetch_array($sql);

        $stuid=$rows['stuid'];
        $stuCname=$rows['stuCname'];
        $stuEname=$rows['stuEname'];
        $passno=$rows['passno'];
        $nationality=$rows['nationality'];
        $sex=$rows['sex'];
        $marital=$rows['marital'];
        $dob=$rows['dob'];
        $address=$rows['address'];
        $email=$rows['email'];
        $phno=$rows['phno'];
        $lename=$rows['lename'];
        $lerelation=$rows['lerelation'];
        $leaddress=$rows['leaddress'];
        $lephno=$rows['lephno'];
        $ctname=$rows['ctname'];
        $ctrelation=$rows['ctrelation'];
        $ctaddress=$rows['ctaddress'];
        $ctphno=$rows['ctphno'];
        $roc=$rows['roc'];    

        
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
        $studentid=$_POST['txtstudentid'];

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
        
        $updatequery=mysqli_query($connection,$update);

        if($updatequery)
        {
            echo "<script>window.alert('Student's Data Update Successfully')</script>
            <script>window.location='update_all.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong</p>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Personal Information Update</title>

</head>
<body>


<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student's Personal Information Update</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="student_update.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <!-- Student ID -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Student ID:</label>
                        <input type="text" class="form-control"  name="txtstuid" id="" value="<?= $stuid ?>" readonly>
                    </fieldset>
                  </div>
                  
                <!-- Name For Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Full Name (Chinese):</label>
                        <input type="text" class="form-control"  name="txtstuCname" value="<?= $stuCname ?>" >
                    </fieldset>
                  </div>

                <!-- Name For English -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Full Name (English):</label>
                        <input type="text" class="form-control"  name="txtstuEname" value="<?= $stuEname ?>" required>
                    </fieldset>
                  </div>

                <!-- Passport No -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Passport No:</label>
                        <input type="text" class="form-control"  name="txtpassno" value="<?= $passno ?>" required>
                    </fieldset>
                  </div>
                
                <!-- Nationality -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Nationality:</label>
                        <input type="text" class="form-control"  name="txtnationality" value="<?= $nationality ?>" required>
                    </fieldset>
                </div>

                <!-- Sex -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Gender:</label>
                        <select name="gender" class="form-control" required>
                            <option value="<?= $sex ?>"><?= $sex ?></option>
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
                            <option value="<?= $marital ?>"><?= $marital ?></option>
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
                        <input type="date" class="form-control" name="txtdate" value="<?= $dob ?>" required>
                    </fieldset>
                </div>

                <!-- Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="txtaddress" value="<?= $address ?>" placeholder="Enter Address" required>
                    </fieldset>
                </div>

                <!-- Email -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Email Address</label>
                        <input type="text" class="form-control" name="txtemail" value="<?= $email ?>" required>
                    </fieldset>
                </div>

                <!-- Phone Number -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="txtphno" value="<?= $phno ?>" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>Legal Guardian:</h4>
                        <br>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="txtlename" value="<?= $lename ?>" placeholder="Enter Gurdian Name" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Relationship -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Relationship</label>
                        <input type="text" class="form-control" name="txtlerelation" value="<?= $lerelation ?>"  required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="txtleaddress" value="<?= $leaddress ?>" required>
                    </fieldset>
                </div>

                <!-- Legal Guardian's Telephone No -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Telephone No</label>
                        <input type="text" class="form-control" name="txtlephno" value="<?= $lephno ?>" placeholder="09*********" required>
                    </fieldset>
                </div>

                <!--  -->
                <!-- Contact Person In Taiwan -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>Contact Person in Taiwan:</h4>
                        <br>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="txtctname" value="<?= $ctname ?>" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Relationship -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Relationship</label>
                        <input type="text" class="form-control" name="txtctrelation" value="<?= $ctrelation ?>" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Address -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="txtctaddress" value="<?= $ctaddress ?>" required>
                    </fieldset>
                </div>

                <!-- Contact Person's Telephone No -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Telephone No</label>
                        <input type="text" class="form-control" name="txtctphno" value="<?= $ctphno ?>" required>
                    </fieldset>
                </div>

                <!-- Citizenship or Not? -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Used to be a Citizen of R.O.C or not?:</label>
                        <select name="rdo" class="form-control" required>
                            <option value="<?= $roc ?>"><?= $roc ?></option>
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
                        <button class="btn btn-info" type="submit" name="btnupdate" value="Update">Update</button>
                        <button class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='update_all.php' ">Cancel</button>
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
