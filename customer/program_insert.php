<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');
  
     if(isset($_POST['btnsave']))
    {   
        $txtpid=$_POST['txtpid'];
        $cboseason=$_POST['cboseason'];
        $cbolevel=$_POST['cbolevel'];
        $cbofirst=$_POST['cbofirst'];
        $cbosecond=$_POST['cbosecond'];
        $cbothird=$_POST['cbothird'];
        $studentid=$_POST['txtstudentid'];


    // --- Insert Program Data to Table --- //
        $query="INSERT INTO program (pid, season, edulevel, fcdep, scdep, tcdep)
                VALUES ('$txtpid','$cboseason','$cbolevel','$cbofirst','$cbosecond','$cbothird')";
        $result=mysqli_query($connection,$query);
        

        if($result)
        {   
            $updatesql="UPDATE stu SET pid='$txtpid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Program Acccount Successfully Created.')</script>
                <script>window.location='scholar_insert.php'</script>";
            }
        }
        else
        {
            echo "<p>Something went wrong in Program Data Insert " . mysqli_error($connection) . "</p>";
        }

       

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Department</title>
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
              <img src="assets/images/process_four.jpg" alt="" class="img-fluid" height="200px">
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
              <h2>Please Indicate to which department and program you are applying at NCNU</h2>
               
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="program_insert.php" method="POST" enctype="multipart/form-data">
                <!-- Program ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Program ID:</label>
                        <input class="form-control" type="text" name="txtpid" value="<?= AutoID('program','pid','PID-',4) ?>" readonly>
                    </fieldset>
                  </div>

                  <!-- Choose Season -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Season:</label>
                        <select name="cboseason" class="form-control" required>
                            <option value="">Choose One Season</option>
                            <option value="Spring">Spring</option>
                            <option value="Fall">Fall</option>
                        </select>
                    </fieldset>
                  </div>
                  
                  <!-- Choose Education Level -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Choose Education Level That You Want To Apply:</label>
                        <select name="cbolevel" class="form-control" required>
                            <option value="">Choose One Level</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Master">Master</option>
                            <option value="PhD">Doctoral(PhD)</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- First Choice  -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">First Choice Department/Institute</label>
                        <select name="cbofirst" class="form-control" required>
                            <option value="">Choose One Department</option>
                            <option value="Computer Science and Information Engineering">Computer Science and Information Engineering</option>
                            <option value="Information Management">Information Management</option>
                            <option value="Education">Education</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="AI">AI</option>
                            <option value="Bio Chemistry">Bio Chemistry</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- Second Choice Department/Institute -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Second Choice Department/Institute</label>
                        <select name="cbosecond" class="form-control" required>
                            <option value="">Choose One Department</option>
                            <option value="Computer Science and Information Engineering">Computer Science and Information Engineering</option>
                            <option value="Information Management">Information Management</option>
                            <option value="Education">Education</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="AI">AI</option>
                            <option value="Bio Chemistry">Bio Chemistry</option>
                        </select>
                    </fieldset>
                  </div>

                 <!-- Third Choice Department/Institute -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                      <label for="" class="">Third Choice Department/Institute</label>
                    <select name="cbothird" class="form-control" required>
                        <option value="">Choose One Department</option>
                        <option value="Computer Science and Information Engineering">Computer Science and Information Engineering</option>
                        <option value="Information Management">Information Management</option>
                        <option value="Education">Education</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="AI">AI</option>
                        <option value="Bio Chemistry">Bio Chemistry</option>
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

</form>
</body>
</html>

<?php
    include('footer.php');
?>