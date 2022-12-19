<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');

    if(isset($_POST['btnsave']))
    {   
        $txtslid=$_POST['txtslid'];
        $cbopmoney=$_POST['cbopmoney'];
        $cbofmoney=$_POST['cbofmoney'];
        $cbosmoney=$_POST['cbosmoney'];
        $cboorg=$_POST['cboorg'];
        $cbohealth=$_POST['cbohealth'];
        $txthpbl=$_POST['txthpbl'];
        $cbowas=$_POST['cbowas'];
        $studentid=$_POST['txtstudentid'];


    // --- Insert Program Data to Table --- //
        $query="INSERT INTO scholar (slid, pmoney, fmoney, smoney, schscholar, health_condi, health_problem, scholar_apply)
                VALUES ('$txtslid','$cbopmoney','$cbofmoney','$cbosmoney','$cboorg','$cbohealth','$txthpbl','$cbowas')";
        $result=mysqli_query($connection,$query);

        if($result)
        {
            $updatesql="UPDATE stu SET slid='$txtslid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Scholarship Account Successfully Created.')</script>
                <script>window.location='docsubmit_insert.php'</script>";
            }
        }
        else
        {
            echo "<p>Something went wrong in Scholarship Data Insert " . mysqli_error($connection) . "</p>";
        }
        
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Registration</title>
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
              <img src="assets/images/process_five.jpg" alt="" class="img-fluid" height="200px">
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
              <h2>Scholarship Information and Financial Statement</h2>
               <label for="">Please State Your Source of Financial Support while furthering your Education in the Republic of China (Taiwan)</label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="scholar_insert.php" method="POST" enctype="multipart/form-data">
                <!-- Scholar ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Scholar ID:</label>
                        <input class="form-control" type="text" name="txtslid" value="<?= AutoID('scholar','slid','SLID-',4) ?>" readonly>
                    </fieldset>
                  </div>

                  <!-- Personal Saving Amount -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Your Personal Saving Amount: </label>
                        <select name="cbopmoney" class="form-control">
                            <option value="">Choose Money Amount</option>
                            <option value="US$0 - US$99">US$0 - US$99</option>
                            <option value="US$100 - US$1000">US$100 - US$1000</option>
                            <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                            <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                            <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                            <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                            <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                            <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                            <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                            <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                            <option value="US$9100 - US$10000">US$9100 - US$10000</option>
                        </select>
                    </fieldset>
                  </div>
                  
                  <!-- Saving Money From Parents -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Choose Your Saving Money From Parents: </label>
                        <select name="cbofmoney" class="form-control">
                            <option value="">Choose Money Amount</option>
                            <option value="US$0 - US$99">US$0 - US$99</option>
                            <option value="US$100 - US$1000">US$100 - US$1000</option>
                            <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                            <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                            <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                            <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                            <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                            <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                            <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                            <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                            <option value="US$9100 - US$10000">US$9100 - US$10000</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- Scholarships Amount  -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Choose Your Scholarship Amount </label>
                        <select name="cbosmoney" class="form-control">
                            <option value="">Choose Money Amount</option>
                            <option value="US$0 - US$99">US$0 - US$99</option>
                            <option value="US$100 - US$1000">US$100 - US$1000</option>
                            <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                            <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                            <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                            <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                            <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                            <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                            <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                            <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                            <option value="US$9100 - US$10000">US$9100 - US$10000</option>
                        </select>
                    </fieldset>
                  </div>

                  <!-- Choose Scholarship Department or Organization -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Choose Scholarship Department or Organization</label>
                        <select name="cboorg" class="form-control">
                            <option value="">Choose Organization</option>
                            <option value="MOE (Ministry of Education)">MOE (Ministry of Education)</option>
                            <option value="MOFA (Ministry of Foreign Affairs)">MOFA (Ministry of Foreign Affairs)</option>
                            <option value="TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)">TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)</option>
                            <option value="From School">From School</option>
                        </select>
                    </fieldset>
                  </div>

                 <!-- Health Condition -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                      <label for="" class="">Choose Your Health Condition</label>
                      <select name="cbohealth" class="form-control">
                            <option value="">Choose Your Health Condition</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                    </fieldset>
                  </div>
                  

                 <!-- Describe Any Health Problem -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <br>
                        <label for="" class="">Describe any Defect or Health Problem You Have</label>
                        <input type="text" name="txthpbl" class="form-control" placeholder="Enter Your Health Problem">
                    </fieldset>
                  </div>
                
                <!-- Want to Apply Scholarship? -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Do You Want to Apply Scholarship?</label>
                        <select name="cbowas" class="form-control" required>
                            <option value="">Choose Want to Apply Scholarship or Not</option>
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