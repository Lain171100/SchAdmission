<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php');
    include('header_form.php');

     if(isset($_POST['btnsave']))
    {   
        $txteid=$_POST['txteid'];
        $txthname=$_POST['txthname'];
        $txthlocation=$_POST['txthlocation'];
        $txthdegree=$_POST['txthdegree'];
        $txthdate=$_POST['txthdate'];
        $txthmajor=$_POST['txthmajor'];
        $txthminor=$_POST['txthminor'];
        $txthgpa=$_POST['txthgpa'];
        // 
        $txtuname=$_POST['txtuname'];
        $txtulocation=$_POST['txtulocation'];
        $txtudegree=$_POST['txtudegree'];
        $txtudate=$_POST['txtudate'];
        $txtumajor=$_POST['txtumajor'];
        $txtuminor=$_POST['txtuminor'];
        $txtugpa=$_POST['txtugpa'];
        // 
        $txtmname=$_POST['txtmname'];
        $txtmlocation=$_POST['txtmlocation'];
        $txtmdegree=$_POST['txtmdegree'];
        $txtmdate=$_POST['txtmdate'];
        $txtmmajor=$_POST['txtmmajor'];
        $txtmminor=$_POST['txtmminor'];
        $txtmgpa=$_POST['txtmgpa'];
        // 
        $txtdname=$_POST['txtdname'];
        $txtdlocation=$_POST['txtdlocation'];
        $txtddegree=$_POST['txtddegree'];
        $txtddate=$_POST['txtddate'];
        $txtdmajor=$_POST['txtdmajor'];
        $txtdminor=$_POST['txtdminor'];
        $txtdgpa=$_POST['txtdgpa'];
        $studentid=$_POST['txtstudentid'];

    // --- Insert Program Data to Table --- //
        $query="INSERT INTO eduback (eid, hname, hlocation, hdegree, hdate, hmajor, hminor, hgpa, uname, ulocation, udegree, udate, umajor, uminor, ugpa, mname, mlocation, mdegree, mdate, mmajor, mminor, mgpa, dname, dlocation, ddegree, ddate, dmajor, dminor, dgpa)
                VALUES ('$txteid','$txthname','$txthlocation','$txthdegree','$txthdate','$txthmajor','$txthminor','$txthgpa','$txtuname','$txtulocation','$txtudegree','$txtudate','$txtumajor','$txtuminor','$txtugpa','$txtmname','$txtmlocation','$txtmdegree','$txtmdate','$txtmmajor','$txtmminor','$txtmgpa','$txtdname','$txtdlocation','$txtddegree','$txtddate','$txtdmajor','$txtdminor','$txtdgpa')";
        $result=mysqli_query($connection,$query);

        if($result)
        {   
            $updatesql="UPDATE stu SET eid='$txteid' WHERE sid='$studentid' ";
            $updatedata=mysqli_query($connection,$updatesql);
            if ($updatedata)
            {
                echo "<script>window.alert('Education Background Account Successfully Created.')</script>
                <script>window.location='chinesepro.php'</script>";
            }
        }
        else
        {
            echo "<p>Something went wrong in Education Background Data Insert " . mysqli_error($connection) . "</p>";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant’s Educational Background</title>

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
              <img src="assets/images/process_two.jpg" alt="" class="img-fluid" height="200px">
          </div>
        </div>
      </div>
    </div>

<!-- form section starts -->

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student’s Educational Background</h2>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-form">
              <form id="contact" action="eduback_insert.php" method="POST" enctype="multipart/form-data">
                <!-- Education Background ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="" hidden>Educational Background ID</label>
                        <input type="text" class="form-control" name="txteid" id="" value="<?= AutoID('eduback','eid','ETU-',4) ?>" hidden>
                    </fieldset>
                  </div>

                  <!-- High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>High School</h4>
                        <br>
                        <label for="">Name of High School:</label>
                        <input type="text" class="form-control" name="txthname" value="" placeholder="Enter Name of High School" required>
                    </fieldset>
                  </div>

                  <!-- Location of High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Location of High School:</label>
                        <input type="text" class="form-control" name="txthlocation" value="" placeholder="Enter Location of High School" required>
                    </fieldset>
                  </div>

                  <!-- Degree in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Degree in High School:</label>
                        <input type="text" class="form-control" name="txthdegree" value="" placeholder="Enter Degree in High School" required>
                    </fieldset>
                  </div>

                   <!-- Date Enrolled in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Date Enrolled in High School:</label>
                        <input type="date" class="form-control  " name="txthdate" value="" placeholder="Date Enrolled in High School" required>
                    </fieldset>
                  </div>

                   <!-- Major in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Major in High School:</label>
                        <input type="text" class="form-control" name="txthmajor" value="" placeholder="Enter Major in High School" required>
                    </fieldset>
                  </div>

                  <!-- Minor in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Minor in High School:</label>
                        <input type="text" class="form-control" name="txthminor" value="" placeholder="Enter Minor in High School" required>
                    </fieldset>
                  </div>

                  <!-- GPA in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">GPA in High School:</label>
                        <input type="text" class="form-control" name="txthgpa" value="" placeholder="Enter GPA in High School" required>
                    </fieldset>
                  </div>
                
                  <!--  -->
                  <!--  -->
                <!-- Master School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>Master's Program</h4>
                        <br>
                        <label for="">Name of Master's Program:</label>
                         <input type="text" class="form-control" name="txtmname" value="" placeholder="Enter Name of Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Location of Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Location of Master's Program:</label>
                        <input type="text" class="form-control" name="txtmlocation" value="" placeholder="Enter Location of Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Degree in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Degree in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmdegree" value="" placeholder="Enter Degree in Master's Program" >
                    </fieldset>
                  </div>

                   <!-- Date Enrolled in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Date Enrolled in Master's Program:</label>
                        <input type="date" class="form-control" name="txtmdate" value="" placeholder="Date Enrolled in Master's Program" >
                    </fieldset>
                  </div>

                   <!-- Major in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Major in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmmajor" value="" placeholder="Enter Major in Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Minor in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Minor in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmminor" value="" placeholder="Enter Minor in Master's Program" >
                    </fieldset>
                  </div>

                  <!-- GPA in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">GPA in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmgpa" value="" placeholder="Enter GPA in Master's Program">
                    </fieldset>
                  </div>


                  <!-- Button -->
                  <div class="col-lg-12">
                    <fieldset>
                        <button type="text" name="txtstudentid" value="<?php echo $_SESSION['sid']; ?>" hidden></button>
                        <button class="btn btn-primary" type="submit" name="btnsave" value="Save">Save</button>
                        <button class="btn btn-danger" type="reset" name="btncancel" value="Clear">Clear</button>
                    </fieldset>
                  </div>
                </div>
              
            </div>
          </div>

          <!-- Second Division -->
        
          <div class="col-md-6">
          <div class="contact-form">
            <!-- Name of College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <h4>College or University</h4>
                    <br>
                    <label for="">Name of College/University</label>
                    <input type="text" class="form-control" name="txtuname" value="" placeholder="Enter Name of College/University" required>
                </fieldset>
            </div>

            <!-- Location of College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Location of College/University</label>
                    <input type="text" class="form-control" name="txtulocation" value="" placeholder="Enter Location of College School" required>
                </fieldset>
            </div>

            <!-- Degree in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Degree in College/University</label>
                    <input type="text" class="form-control" name="txtudegree" value="" placeholder="Enter Degree in College School" required>
                </fieldset>
            </div>

            <!-- Date Enrolled in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Date Enrolled in College/University</label>
                    <input type="date" class="form-control" name="txtudate" value="" placeholder="Date Enrolled in High School" required>
                </fieldset>
            </div>

            <!-- Major in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Major in College/University</label>
                    <input type="text" class="form-control" name="txtumajor" value="" placeholder="Enter Major in College School" required>
                </fieldset>
            </div>

            <!-- Minor in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Minor in College/University</label>
                    <input type="text" class="form-control" name="txtuminor" value="" placeholder="Enter Minor in College School" required>
                </fieldset>
            </div>


            <!-- GPA in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">GPA in College/University</label>
                    <input type="text" class="form-control" name="txtugpa" value="" placeholder="Enter GPA in College School" required>
                </fieldset>
            </div>

            <!--  -->
            <!-- Doctoral -->
            
            <!-- Name of Doctoral -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <h4>Doctoral's Program</h4>
                    <br>
                    <label for="">Name of Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdname" value="" placeholder="Enter Name of Doctoral's Program">
                </fieldset>
            </div>

            <!-- Location of Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Location of Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdlocation" value="" placeholder="Enter Location of Doctoral's Program">
                </fieldset>
            </div>

            <!-- Degree in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Degree in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtddegree" value="" placeholder="Enter Degree in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Date Enrolled in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Date Enrolled in Doctoral's Program</label>
                    <input type="date" class="form-control" name="txtddate" value="" placeholder="Date Enrolled in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Major in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Major in Doctoral's Program</label>
                     <input type="text" class="form-control" name="txtdmajor" value="" placeholder="Enter Major in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Minor in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Minor in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdminor" value="" placeholder="Enter Minor in Doctoral's Program">
                </fieldset>
            </div>

            <!-- GPA in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">GPA in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdgpa" value="" placeholder="Enter GPA in Doctoral's Program">
                </fieldset>
            </div>


        </form>
       </div>
    </div>

</body>
</html>

<?php
    include('footer.php');
?>