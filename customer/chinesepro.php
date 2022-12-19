<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');

     if(isset($_POST['btnsave']))
    {   
        $txtcid = $_POST['txtcid'];
        $txtyear=$_POST['txtyear'];
        $txtplace=$_POST['txtplace'];
        $cbolistening=$_POST['cbolistening'];
        $cbospeaking=$_POST['cbospeaking'];
        $cboreading=$_POST['cboreading'];
        $cbowriting=$_POST['cbowriting'];
        $studentid=$_POST['txtstudentid'];


    // --- Insert Staff Data to Staff Table --- //
        $query="INSERT INTO c_language (cid,ctime ,cplace ,listening ,speaking ,reading ,writing  )
                VALUES ('$txtcid','$txtyear','$txtplace','$cbolistening','$cbospeaking','$cboreading','$cbowriting')";
        $result=mysqli_query($connection,$query);

        if($result)
        {   
            $updatesql="UPDATE stu SET cid='$txtcid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Chinese Proficiency Language Successfully Created.')</script>
                <script>window.location='program_insert.php'</script>";
            }
            
        }
        else
        {
            echo "<p>Something went wrong in Chinese Proficiency Language Insert " . mysqli_error($connection) . "</p>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Proficiency</title>
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
              <img src="assets/images/process_three.jpg" alt="" class="img-fluid" height="200px">
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
              <h2>Chinese Proficiency Level</h2>
              
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="chinesepro.php" method="POST" enctype="multipart/form-data">
                <!-- Chinese Proficiency ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Chinese Language ID</label>
                        <input class="form-control" type="text" name="txtcid" placeholder="" value="<?= AutoID('c_language','cid','CTU-',4) ?>" readonly>
                    </fieldset>
                  </div>

                <!-- Year that Studied Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">How Long Have You Studied Chinese? (E.g. 1 - year / 1 - month)</label>
                        <input class="form-control" type="text" name="txtyear" value="" placeholder="Enter Year That You Studied Chinese" required>
                    </fieldset>
                  </div>

                <!-- Place/Organization that Studied Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Organization or Place Where You Studied Chinese?</label>
                        <input class="form-control" type="text" name="txtplace" value="" placeholder="Organization/Place That You Studied Chinese" required>
                    </fieldset>
                  </div>

                  <!-- Listening Level -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Listening Level</label>
                        <select name="cbolistening" class="form-control" required>
                        <option value="">Choose One Level</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                    </fieldset>
                  </div>
                  
                  <!-- Speaking Level -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Speaking Level</label>
                        <select name="cbospeaking" class="form-control" required>
                            <option value="">Choose One Level</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- Reading Skill  -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Reading Skill</label>
                        <select name="cboreading" class="form-control" required>
                            <option value="">Choose One Level</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- Writing Skill -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Writing Skill</label>
                        <select name="cbowriting" class="form-control" required>
                            <option value="">Choose One Level</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
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