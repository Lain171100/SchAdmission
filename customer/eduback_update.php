<?php

    include('connect.php');
    include('autoid_functions.php');

    if(isset($_GET['eid']))
    {
        $txteid=$_GET['eid'];

        $sql="SELECT * FROM eduback
              WHERE eid='$txteid' ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);
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
            echo "<script>window.location='eduback_data.php'</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Background Update</title>
    <!-- <link rel="stylesheet" href="../admin/formstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> -->
</head>
<body>
    <form action="eduback_update.php" method="POST" enctype="multipart/form-data">
    <legend><b>Applicant’s Educational Background</b></legend><br>
    
    <!-- Educational BackGround ID -->
    <div>
        <label for=""><b>Educational Background ID</b></label>
        <input type="text" name="txteid" id="" value="<?= $count['eid'] ?>" readonly>
    </div>
    <!--  -->
      <div class="divTable">
             <div class="headRow">
                <div class="divCell" align="center">Programs</div>
                <div  class="divCell">Name of School</div>
                <div  class="divCell">School Location</div>
                <div  class="divCell">Degree</div>
                <div  class="divCell">Dates Enrolled</div>
                <div  class="divCell">Major</div>
                <div  class="divCell">Minor</div>
                <div  class="divCell">GPA</div>
             </div>

            <div class="divRow">
                <div class="divCell" align="center">High School</div>
                <!-- Name of High School -->
                <div class="divCell">
                    <input type="text" name="txthname" value="<?= $count['hname'] ?>" placeholder="Name of High School">
                </div>
                <!-- Location of High School -->
                <div class="divCell">
                    <input type="text" name="txthlocation" value="<?= $count['hlocation'] ?>" placeholder="Location of High School">
                </div>
                <!-- Degree in High School -->
                <div class="divCell">
                    <input type="text" name="txthdegree" value="<?= $count['hdegree'] ?>" placeholder="Degree in High School">
                </div>
                <!-- Date Enrolled in High School -->
                <div class="divCell">
                    <input type="date" name="txthdate" value="<?= $count['hdate'] ?>" placeholder="Date Enrolled in High School">
                </div>
                <!-- Major in High School -->
                <div class="divCell">
                    <input type="text" name="txthmajor" value="<?= $count['hmajor'] ?>" placeholder="Major in High School">
                </div>
                <!-- Minor in High School -->
                <div class="divCell">
                    <input type="text" name="txthminor" value="<?= $count['hminor'] ?>" placeholder="Minor in High School">
                </div>
                <!-- GPA in High School -->
                <div class="divCell">
                    <input type="text" name="txthgpa" value="<?= $count['hgpa'] ?>" placeholder="GPA in High School">
                </div>
            </div>

            <!-- College or University -->
             <div class="divRow">
                <div class="divCell" align="center">College or University</div>
                <!-- Name of College School -->
                <div class="divCell">
                    <input type="text" name="txtuname" value="<?= $count['uname'] ?>" placeholder="Name of College School">
                </div>
                <!-- Location of College School -->
                <div class="divCell">
                    <input type="text" name="txtulocation" value="<?= $count['ulocation'] ?>" placeholder="Location of College School">
                </div>
                <!-- Degree in College School -->
                <div class="divCell">
                    <input type="text" name="txtudegree" value="<?= $count['udegree'] ?>" placeholder="Degree in College School">
                </div>
                <!-- Date Enrolled in High School -->
                <div class="divCell">
                    <input type="date" name="txtudate" value="<?= $count['udate'] ?>" placeholder="Date Enrolled in High School">
                </div>
                <!-- Major in College School -->
                <div class="divCell">
                    <input type="text" name="txtumajor" value="<?= $count['umajor'] ?>" placeholder="Major in College School">
                </div>
                <!-- Minor in College School -->
                <div class="divCell">
                    <input type="text" name="txtuminor" value="<?= $count['uminor'] ?>" placeholder="Minor in College School">
                </div>
                <!-- GPA in College School -->
                <div class="divCell">
                    <input type="text" name="txtugpa" value="<?= $count['ugpa'] ?>" placeholder="GPA in College School">
                </div>
            </div>

            <!-- Master's Program -->
             <div class="divRow">
                <div class="divCell" align="center">Master's Program</div>
                <!-- Name of Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmname" value="<?= $count['mname'] ?>" placeholder="Name of Master's Program">
                </div>
                <!-- Location of Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmlocation" value="<?= $count['mlocation'] ?>" placeholder="Location of Master's Program">
                </div>
                <!-- Degree in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmdegree" value="<?= $count['mdegree'] ?>" placeholder="Degree in Master's Program">
                </div>
                <!-- Date Enrolled in Master's Program -->
                <div class="divCell">
                    <input type="date" name="txtmdate" value="<?= $count['mdate'] ?>" placeholder="Date Enrolled in Master's Program">
                </div>
                <!-- Major in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmmajor" value="<?= $count['mmajor'] ?>" placeholder="Major in Master's Program">
                </div>
                <!-- Minor in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmminor" value="<?= $count['mminor'] ?>" placeholder="Minor in Master's Program">
                </div>
                <!-- GPA in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmgpa" value="<?= $count['mgpa'] ?>" placeholder="GPA in Master's Program">
                </div>
            </div>

            <!-- Doctoral's Program -->
             <div class="divRow">
                <div class="divCell" align="center">Doctoral's Program</div>
                <!-- Name of Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdname" value="<?= $count['dname'] ?>" placeholder="Name of Doctoral's Program">
                </div>
                <!-- Location of Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdlocation" value="<?= $count['dlocation'] ?>" placeholder="Location of Doctoral's Program">
                </div>
                <!-- Degree in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtddegree" value="<?= $count['ddegree'] ?>" placeholder="Degree in Doctoral's Program">
                </div>
                <!-- Date Enrolled in Doctoral's Program -->
                <div class="divCell">
                    <input type="date" name="txtddate" value="<?= $count['ddate'] ?>" placeholder="Date Enrolled in Doctoral's Program">
                </div>
                <!-- Major in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdmajor" value="<?= $count['dmajor'] ?>" placeholder="Major in Doctoral's Program">
                </div>
                <!-- Minor in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdminor" value="<?= $count['dminor'] ?>" placeholder="Minor in Doctoral's Program">
                </div>
                <!-- GPA in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdgpa" value="<?= $count['dgpa'] ?>" placeholder="GPA in Doctoral's Program">
                </div>
            </div>


      <!-- Button -->
        <div>
            <input class="btn btn-primary" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='eduback_data.php' ">
        </div>
    </form>
</body>
</html>


<style type="text/css">
    .divTable
    {
        display:  table;
        width:auto;
        background-color:#eee;
        border:1px solid  #666666;
        border-spacing:5px;/*cellspacing:poor IE support for  this*/
       /* border-collapse:separate;*/
    }

    .divRow
    {
       display:table-row;
       width:auto;
    }

    .divCell
    {
        float:left; /*fix for  buggy browsers*/
        display:table-column;
        width:170px;
        background-color:#ccc;
    }
</style>