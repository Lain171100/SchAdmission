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

        // High School
        $eid=$rows['eid'];
        $hname=$rows['hname'];
        $hlocation=$rows['hlocation'];
        $hdegree=$rows['hdegree'];
        $hdate=$rows['hdate'];
        $hmajor=$rows['hmajor'];
        $hminor=$rows['hminor'];
        $hgpa=$rows['hgpa'];
        // University
        $uname=$rows['uname'];
        $ulocation=$rows['ulocation'];
        $udegree=$rows['udegree'];
        $udate=$rows['udate'];
        $umajor=$rows['umajor'];
        $uminor=$rows['uminor'];
        $ugpa=$rows['ugpa'];
        // Master
        $mname=$rows['mname'];
        $mlocation=$rows['mlocation'];
        $mdegree=$rows['mdegree'];
        $mdate=$rows['mdate'];
        $mmajor=$rows['mmajor'];
        $mminor=$rows['mminor'];
        $mgpa=$rows['mgpa'];
        // 
        $dname=$rows['dname'];
        $dlocation=$rows['dlocation'];
        $ddegree=$rows['ddegree'];
        $ddate=$rows['ddate'];
        $dmajor=$rows['dmajor'];
        $dminor=$rows['dminor'];
        $dgpa=$rows['dgpa'];

    }

    if(isset($_POST['btnupdate']))
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
        // student id
        $studentid=$_POST['txtstudentid'];

        // --- Update Data --- //
        $update="UPDATE eduback
                 SET hname ='$txthname',
                     hlocation ='$txthlocation',
                     hdegree ='$txthdegree',
                     hdate ='$txthdate',
                     hmajor ='$txthmajor',
                     hminor ='$txthminor',
                     hgpa ='$txthgpa',
                    --  
                     uname ='$txtuname',
                     ulocation ='$txtulocation',
                     udegree ='$txtudegree',
                     udate ='$txtudate',
                     umajor ='$txtumajor',
                     uminor ='$txtuminor',
                     ugpa ='$txtugpa',
                    --  
                     mname ='$txtmname',
                     mlocation ='$txtmlocation',
                     mdegree ='$txtmdegree',
                     mdate ='$txtmdate',
                     mmajor ='$txtmmajor',
                     mminor ='$txtmminor',
                     mgpa ='$txtmgpa',
                    --  
                     dname ='$txtdname',
                     dlocation ='$txtdlocation',
                     ddegree ='$txtddegree',
                     ddate ='$txtddate',
                     dmajor ='$txtdmajor',
                     dminor ='$txtdminor',
                     dgpa ='$txtdgpa'

                 WHERE eid='$txteid' ";
        
        $query=mysqli_query($connection,$update);

        if($query)
        {
            echo "<script>window.alert('Education Background's Data Update Successfully')</script>";
            echo "<script>window.location='update_all.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong</p>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Educational Background Update</title>

</head>
<body>

<!-- form section starts -->

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Student's Educational Background Update</h2>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-form">
              <form id="contact" action="eduback_update.php" method="POST" enctype="multipart/form-data">
                <!-- Education Background ID -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <!-- <label for="" hidden>Educational Background ID</label> -->
                        <input type="text" class="form-control" name="txteid" id="" value="<?= $eid ?>" hidden>
                    </fieldset>
                  </div>

                  <!-- High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <h4>High School</h4>
                        <br>
                        <label for="">Name of High School:</label>
                        <input type="text" class="form-control" name="txthname" value="<?= $hname ?>" placeholder="Enter Name of High School" required>
                    </fieldset>
                  </div>

                  <!-- Location of High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Location of High School:</label>
                        <input type="text" class="form-control" name="txthlocation" value="<?= $hlocation ?>" placeholder="Enter Location of High School" required>
                    </fieldset>
                  </div>

                  <!-- Degree in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Degree in High School:</label>
                        <input type="text" class="form-control" name="txthdegree" value="<?= $hdegree ?>" placeholder="Enter Degree in High School" required>
                    </fieldset>
                  </div>

                   <!-- Date Enrolled in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Date Enrolled in High School:</label>
                        <input type="date" class="form-control  " name="txthdate" value="<?= $hdate ?>" placeholder="Date Enrolled in High School" required>
                    </fieldset>
                  </div>

                   <!-- Major in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Major in High School:</label>
                        <input type="text" class="form-control" name="txthmajor" value="<?= $hmajor ?>" placeholder="Enter Major in High School" required>
                    </fieldset>
                  </div>

                  <!-- Minor in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Minor in High School:</label>
                        <input type="text" class="form-control" name="txthminor" value="<?= $hminor ?>" placeholder="Enter Minor in High School" required>
                    </fieldset>
                  </div>

                  <!-- GPA in High School -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">GPA in High School:</label>
                        <input type="text" class="form-control" name="txthgpa" value="<?= $hgpa ?>" placeholder="Enter GPA in High School" required>
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
                         <input type="text" class="form-control" name="txtmname" value="<?= $mname ?>" placeholder="Enter Name of Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Location of Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Location of Master's Program:</label>
                        <input type="text" class="form-control" name="txtmlocation" value="<?= $mlocation ?>" placeholder="Enter Location of Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Degree in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Degree in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmdegree" value="<?= $mdegree ?>" placeholder="Enter Degree in Master's Program" >
                    </fieldset>
                  </div>

                   <!-- Date Enrolled in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Date Enrolled in Master's Program:</label>
                        <input type="date" class="form-control" name="txtmdate" value="<?= $mdate ?>" placeholder="Date Enrolled in Master's Program" >
                    </fieldset>
                  </div>

                   <!-- Major in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Major in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmmajor" value="<?= $mmajor ?>" placeholder="Enter Major in Master's Program" >
                    </fieldset>
                  </div>

                  <!-- Minor in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">Minor in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmminor" value="<?= $mminor ?>" placeholder="Enter Minor in Master's Program" >
                    </fieldset>
                  </div>

                  <!-- GPA in Master's Program -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <label for="">GPA in Master's Program:</label>
                        <input type="text" class="form-control" name="txtmgpa" value="<?= $mgpa ?>" placeholder="Enter GPA in Master's Program">
                    </fieldset>
                  </div>


                  <!-- Button -->
                  <div class="col-lg-12">
                    <fieldset>
                        <input type="text" name="txtstudentid" value="<?php echo $_SESSION['sid']; ?>" hidden>
                        <button class="btn btn-info" type="submit" name="btnupdate" value="Update">Update</button>
                        <button class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='update_all.php' ">Cancel</button>
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
                    <input type="text" class="form-control" name="txtuname" value="<?= $uname ?>" placeholder="Enter Name of College/University" required>
                </fieldset>
            </div>

            <!-- Location of College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Location of College/University</label>
                    <input type="text" class="form-control" name="txtulocation" value="<?= $ulocation ?>" placeholder="Enter Location of College School" required>
                </fieldset>
            </div>

            <!-- Degree in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Degree in College/University</label>
                    <input type="text" class="form-control" name="txtudegree" value="<?= $udegree ?>" placeholder="Enter Degree in College School" required>
                </fieldset>
            </div>

            <!-- Date Enrolled in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Date Enrolled in College/University</label>
                    <input type="date" class="form-control" name="txtudate" value="<?= $udate ?>" placeholder="Date Enrolled in High School" required>
                </fieldset>
            </div>

            <!-- Major in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Major in College/University</label>
                    <input type="text" class="form-control" name="txtumajor" value="<?= $umajor ?>" placeholder="Enter Major in College School" required>
                </fieldset>
            </div>

            <!-- Minor in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Minor in College/University</label>
                    <input type="text" class="form-control" name="txtuminor" value="<?= $uminor ?>" placeholder="Enter Minor in College School" required>
                </fieldset>
            </div>


            <!-- GPA in College/University -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">GPA in College/University</label>
                    <input type="text" class="form-control" name="txtugpa" value="<?= $ugpa ?>" placeholder="Enter GPA in College School" required>
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
                    <input type="text" class="form-control" name="txtdname" value="<?= $dname ?>" placeholder="Enter Name of Doctoral's Program">
                </fieldset>
            </div>

            <!-- Location of Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Location of Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdlocation" value="<?= $dlocation ?>" placeholder="Enter Location of Doctoral's Program">
                </fieldset>
            </div>

            <!-- Degree in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Degree in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtddegree" value="<?= $ddegree ?>" placeholder="Enter Degree in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Date Enrolled in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Date Enrolled in Doctoral's Program</label>
                    <input type="date" class="form-control" name="txtddate" value="<?= $ddate ?>" placeholder="Date Enrolled in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Major in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Major in Doctoral's Program</label>
                     <input type="text" class="form-control" name="txtdmajor" value="<?= $dmajor ?>" placeholder="Enter Major in Doctoral's Program">
                </fieldset>
            </div>

            <!-- Minor in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">Minor in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdminor" value="<?= $dminor ?>" placeholder="Enter Minor in Doctoral's Program">
                </fieldset>
            </div>

            <!-- GPA in Doctoral's Program -->   
            <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                    <label for="">GPA in Doctoral's Program</label>
                    <input type="text" class="form-control" name="txtdgpa" value="<?= $ddate ?>" placeholder="Enter GPA in Doctoral's Program">
                </fieldset>
            </div>


        </form>
       </div>
    </div>
    </div>

</body>
</html>

<?php
    include('footer.php');
?>
