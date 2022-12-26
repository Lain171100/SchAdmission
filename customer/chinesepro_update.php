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

        $cid=$rows['cid'];
        $ctime=$rows['ctime'];
        $cplace=$rows['cplace'];
        $listening=$rows['listening'];
        $speaking=$rows['speaking'];
        $reading=$rows['reading'];
        $writing=$rows['writing'];

    }


    if(isset($_POST['btnupdate']))
    {
        $txtcid=$_POST['txtcid'];
        $txtyear=$_POST['txtyear'];
        $txtplace=$_POST['txtplace'];
        $cbolistening=$_POST['cbolistening'];
        $cbospeaking=$_POST['cbospeaking'];
        $cboreading=$_POST['cboreading'];
        $cbowriting=$_POST['cbowriting'];
        // student id
        $studentid=$_POST['txtstudentid'];

        $update="UPDATE c_language
                 SET ctime='$txtyear',
                     cplace='$txtplace',
                     listening='$cbolistening',
                     speaking='$cbospeaking',
                     reading='$cboreading',
                     writing='$cbowriting'
                 WHERE cid='$txtcid' ";
        $updatequery=mysqli_query($connection,$update);
        if($updatequery)
        {
            echo "<script>window.alert('Chinese Proficiency Level  is Updated')</script>";
            echo "<script>window.location='update_all.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Staff Update".mysqli_error($connection)."</p>";
        }

    }


?>


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
              <form id="contact" action="chinesepro_update.php" method="POST" enctype="multipart/form-data">
                <!-- Chinese Proficiency ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <!-- <label for="">Chinese Language ID</label> -->
                        <input class="form-control" type="text" name="txtcid" placeholder="" value="<?= $cid ?>" hidden>
                    </fieldset>
                  </div>

                <!-- Year that Studied Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">How Long Have You Studied Chinese? (E.g. 1 - year / 1 - month)</label>
                        <input class="form-control" type="text" name="txtyear" value="<?= $ctime ?>" placeholder="Enter Year That You Studied Chinese" required>
                    </fieldset>
                  </div>

                <!-- Place/Organization that Studied Chinese -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Organization or Place Where You Studied Chinese?</label>
                        <input class="form-control" type="text" name="txtplace" value="<?= $cplace ?>" placeholder="Organization/Place That You Studied Chinese" required>
                    </fieldset>
                  </div>

                  <!-- Listening Level -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Listening Level</label>
                        <select name="cbolistening" class="form-control" required>
                            <option value="<?= $listening ?>"><?= $listening ?></option>
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
                            <option value="<?= $speaking ?>"><?= $speaking ?></option>
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
                            <option value="<?= $reading ?>"><?= $reading ?></option>
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
                            <option value="<?= $writing ?>"><?= $writing ?></option>
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