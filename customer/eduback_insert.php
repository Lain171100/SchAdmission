<?php
    include('connect.php');
    include('autoid_functions.php');
    // include('../admin/teacher_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant’s Educational Background</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> -->
</head>
<body>
    <form id="form1" action="eduback_data.php" method="POST" enctype="multipart/form-data">
        <legend><b>Applicant’s Educational Background</b></legend><br>
    
    <!-- Educational BackGround ID -->
    <div>
        <label for=""><b>Educational Background ID</b></label>
        <input type="text" name="txteid" id="" value="<?= AutoID('eduback','eid','ETU-',4) ?>" readonly>
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
                    <input type="text" name="txthname" value="" placeholder="Name of High School">
                </div>
                <!-- Location of High School -->
                <div class="divCell">
                    <input type="text" name="txthlocation" value="" placeholder="Location of High School">
                </div>
                <!-- Degree in High School -->
                <div class="divCell">
                    <input type="text" name="txthdegree" value="" placeholder="Degree in High School">
                </div>
                <!-- Date Enrolled in High School -->
                <div class="divCell">
                    <input type="date" name="txthdate" value="" placeholder="Date Enrolled in High School">
                </div>
                <!-- Major in High School -->
                <div class="divCell">
                    <input type="text" name="txthmajor" value="" placeholder="Major in High School">
                </div>
                <!-- Minor in High School -->
                <div class="divCell">
                    <input type="text" name="txthminor" value="" placeholder="Minor in High School">
                </div>
                <!-- GPA in High School -->
                <div class="divCell">
                    <input type="text" name="txthgpa" value="" placeholder="GPA in High School">
                </div>
            </div>

            <!-- College or University -->
             <div class="divRow">
                <div class="divCell" align="center">College or University</div>
                <!-- Name of College School -->
                <div class="divCell">
                    <input type="text" name="txtuname" value="" placeholder="Name of College School">
                </div>
                <!-- Location of College School -->
                <div class="divCell">
                    <input type="text" name="txtulocation" value="" placeholder="Location of College School">
                </div>
                <!-- Degree in College School -->
                <div class="divCell">
                    <input type="text" name="txtudegree" value="" placeholder="Degree in College School">
                </div>
                <!-- Date Enrolled in High School -->
                <div class="divCell">
                    <input type="date" name="txtudate" value="" placeholder="Date Enrolled in High School">
                </div>
                <!-- Major in College School -->
                <div class="divCell">
                    <input type="text" name="txtumajor" value="" placeholder="Major in College School">
                </div>
                <!-- Minor in College School -->
                <div class="divCell">
                    <input type="text" name="txtuminor" value="" placeholder="Minor in College School">
                </div>
                <!-- GPA in College School -->
                <div class="divCell">
                    <input type="text" name="txtugpa" value="" placeholder="GPA in College School">
                </div>
            </div>

            <!-- Master's Program -->
             <div class="divRow">
                <div class="divCell" align="center">Master's Program</div>
                <!-- Name of Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmname" value="" placeholder="Name of Master's Program">
                </div>
                <!-- Location of Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmlocation" value="" placeholder="Location of Master's Program">
                </div>
                <!-- Degree in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmdegree" value="" placeholder="Degree in Master's Program">
                </div>
                <!-- Date Enrolled in Master's Program -->
                <div class="divCell">
                    <input type="date" name="txtmdate" value="" placeholder="Date Enrolled in Master's Program">
                </div>
                <!-- Major in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmmajor" value="" placeholder="Major in Master's Program">
                </div>
                <!-- Minor in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmminor" value="" placeholder="Minor in Master's Program">
                </div>
                <!-- GPA in Master's Program -->
                <div class="divCell">
                    <input type="text" name="txtmgpa" value="" placeholder="GPA in Master's Program">
                </div>
            </div>

            <!-- Doctoral's Program -->
             <div class="divRow">
                <div class="divCell" align="center">Doctoral's Program</div>
                <!-- Name of Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdname" value="" placeholder="Name of Doctoral's Program">
                </div>
                <!-- Location of Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdlocation" value="" placeholder="Location of Doctoral's Program">
                </div>
                <!-- Degree in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtddegree" value="" placeholder="Degree in Doctoral's Program">
                </div>
                <!-- Date Enrolled in Doctoral's Program -->
                <div class="divCell">
                    <input type="date" name="txtddate" value="" placeholder="Date Enrolled in Doctoral's Program">
                </div>
                <!-- Major in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdmajor" value="" placeholder="Major in Doctoral's Program">
                </div>
                <!-- Minor in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdminor" value="" placeholder="Minor in Doctoral's Program">
                </div>
                <!-- GPA in Doctoral's Program -->
                <div class="divCell">
                    <input type="text" name="txtdgpa" value="" placeholder="GPA in Doctoral's Program">
                </div>
            </div>

      <!-- Extra -->


      <!-- <legend><b>Extra Records(If informations are not enough)</b></legend><br>
      <div class="divTable">
             <div class="headRow">
                <div class="divCell" align="center">.</div>
                <div  class="divCell">Name of School</div>
                <div  class="divCell">School Location</div>
                <div  class="divCell">Degree</div>
                <div  class="divCell">Dates Enrolled</div>
                <div  class="divCell">Major</div>
                <div  class="divCell">Minor</div>
             </div>
            <div class="divRow">
                <div class="divCell" align="center">Extra 1</div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
            </div>
            <div class="divRow">
                <div class="divCell" align="center">Extra 2</div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
                <div class="divCell"><input type="text" name="" value=""></div>
            </div>
      </div> -->

      <!-- Button -->
        <div>
            <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
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