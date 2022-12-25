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

        $pid=$rows['pid'];
        $season=$rows['season'];
        $edulevel=$rows['edulevel'];
        $fcdep=$rows['fcdep'];
        $scdep=$rows['scdep'];
        $tcdep=$rows['tcdep'];

    }


    if(isset($_POST['btnupdate']))
    {
        $txtpid=$_POST['txtpid'];
        $cboseason=$_POST['cboseason'];
        $cbolevel=$_POST['cbolevel'];
        $cbofirst=$_POST['cbofirst'];
        $cbosecond=$_POST['cbosecond'];
        $cbothird=$_POST['cbothird'];
        // student id
        $studentid=$_POST['txtstudentid'];

        $update="UPDATE program
                 SET season='$cboseason',
                     edulevel='$cbolevel',
                     fcdep='$cbofirst',
                     scdep='$cbosecond',
                     tcdep='$cbothird'
                 WHERE pid='$txtpid' ";
        $query=mysqli_query($connection,$update);
        if($query)
        {
            echo "<script>window.alert('Program Data is Updated')</script>";
            echo "<script>window.location='update_all.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Program Update".mysqli_error($connection)."</p>";
        }

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Department Update</title>
</head>
<body>


<!-- form section starts  -->

<section class="contact" id="contact">

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Please Update to which department and program you are applying at NCNU</h2>
               
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="program_update.php" method="POST" enctype="multipart/form-data">
                <!-- Program ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Program ID:</label>
                        <input class="form-control" type="text" name="txtpid" value="<?= $pid ?>" readonly>
                    </fieldset>
                  </div>

                  <!-- Choose Season -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" class="">Choose Season:</label>
                        <select name="cboseason" class="form-control" required>
                            <option value="<?= $season ?>"><?= $season ?></option>
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
                            <option value="<?= $edulevel ?>"><?= $edulevel ?></option>
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
                            <option value="<?= $fcdep ?>"><?= $fcdep ?></option>
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
                            <option value="<?= $scdep ?>"><?= $scdep ?></option>
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
                        <option value="<?= $tcdep ?>"><?= $tcdep ?></option>
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

</form>
</body>
</html>

<?php
    include('footer.php');
?>
