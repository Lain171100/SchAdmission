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

        $slid=$rows['slid'];
        $pmoney=$rows['pmoney'];
        $fmoney=$rows['fmoney'];
        $smoney=$rows['smoney'];
        $schscholar=$rows['schscholar'];
        $health_condi=$rows['health_condi'];
        $health_problem=$rows['health_problem'];
        $scholar_apply=$rows['scholar_apply'];
    }

    if(isset($_POST['btnupdate']))
    {
        $txtslid=$_POST['txtslid'];
        $cbopmoney=$_POST['cbopmoney'];
        $cbofmoney=$_POST['cbofmoney'];
        $cbosmoney=$_POST['cbosmoney'];
        $cboorg=$_POST['cboorg'];
        $cbohealth=$_POST['cbohealth'];
        $txthpbl=$_POST['txthpbl'];
        $cbowas=$_POST['cbowas'];
        // student id
        $studentid=$_POST['txtstudentid'];

        $update="UPDATE scholar
                 SET pmoney='$cbopmoney',
                     fmoney='$cbofmoney',
                     smoney='$cbosmoney',
                     schscholar='$cboorg',
                     health_condi='$cbohealth',
                     health_problem='$txthpbl',
                     scholar_apply='$cbowas'
                 WHERE slid='$txtslid' ";
        $slquery=mysqli_query($connection,$update);
        if($slquery)
        {
            echo "<script>window.alert('Financial Information and Scholar Informations are Updated')</script>";
            echo "<script>window.location='update_all.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Financial Information and Scholar Information Update".mysqli_error($connection)."</p>";
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Statement and Scholar Information Update Form</title>
</head>
<body>

<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Scholarship Information and Financial Statement Update Form</h2>
               <label for="">Please State Your Source of Financial Support while furthering your Education in the Republic of China (Taiwan)</label>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="scholar_update.php" method="POST" enctype="multipart/form-data">
                <!-- Scholar ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <!-- <label for="">Scholar ID:</label> -->
                        <input class="form-control" type="text" name="txtslid" value="<?= $slid ?>" hidden>
                    </fieldset>
                  </div>

                  <!-- Personal Saving Amount -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Your Personal Saving Amount: </label>
                        <select name="cbopmoney" class="form-control">
                            <option value="<?= $pmoney ?>"><?= $pmoney ?></option>
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
                            <option value="<?= $fmoney ?>"><?= $fmoney ?></option>
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
                            <option value="<?= $smoney ?>"><?= $smoney ?></option>
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
                            <option value="<?= $schscholar ?>"><?= $schscholar ?></option>
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
                            <option value="<?= $health_condi ?>"><?= $health_condi ?></option>
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
                        <input type="text" name="txthpbl" class="form-control" placeholder="Enter Your Health Problem" value="<?= $health_problem ?>">
                    </fieldset>
                  </div>
                
                <!-- Want to Apply Scholarship? -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Do You Want to Apply Scholarship?</label>
                        <select name="cbowas" class="form-control" required>
                            <option value="<?= $scholar_apply ?>"><?= $scholar_apply ?></option>
                            <option value="">Choose Want to Apply Scholarship or Not</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </fieldset>
                  </div>
     
                <!-- Button -->
                  <div class="col-lg-12">
                    <fieldset>
                        <input type="text" name="txtstudentid" value="<?php echo $_SESSION['sid']; ?>" hidden>
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
