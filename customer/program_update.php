<?php
    
    include('connect.php');
    include('../admin/teacher_header.php');

    if(isset($_REQUEST['pid']))
    {
        $data=$_REQUEST['pid'];

        $sql="SELECT * FROM program
              WHERE pid='$data'  ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);        

    }

    if(isset($_POST['btnupdate']))
    {
        $txtpid=$_POST['txtpid'];
        $cboseason=$_POST['cboseason'];
        $cbolevel=$_POST['cbolevel'];
        $cbofirst=$_POST['cbofirst'];
        $cbosecond=$_POST['cbosecond'];
        $cbothird=$_POST['cbothird'];

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
            echo "<script>window.location='program_data.php'</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program and Department Data Update</title>
    <!-- <link rel="stylesheet" href="formstyle.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> 
</head>
<body>

    <form action="program_update.php" method="POST" enctype="multiplepart/form-data">

         <legend><b>Please Indicate to which department and program you are applying at NCNU</b></legend>
        <div>
            <label for=""><b>Choose and Fill Program</b></label>
        </div>
            <!-- Program ID -->
        <div>
            <label for="">Program ID:</label>
            <input class="form-control" type="text" name="txtpid" value="<?= $count['pid'] ?>" readonly>
        </div> 
            <!-- Choose Season -->
        <div class="">
            <label for="" >Choose Season:</label>
            <select name="cboseason" class="custom-select">
                 <option value="<?= $count['season'] ?>"><?= $count['season'] ?></option>
                <option value="">Choose One Season</option>
                <option value="Spring">Spring</option>
                <option value="Fall">Fall</option>
            </select>
        </div>

        <!-- Choose Education Level -->
        <div class="">
            <label for="" class="">Choose Education Level That You Want To Apply:</label>
            <select name="cbolevel" class="custom-select">
                <option value="<?= $count['edulevel'] ?>"><?= $count['edulevel'] ?></option>
                <option value="">Choose One Level</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="PhD">Doctoral(PhD)</option>
            </select>
        </div>

        <!-- First Choice -->
        <div class="">
            <label for="" class="">First Choice Department/Institute</label>
            <select name="cbofirst" class="custom-select">
                <option value="<?= $count['fcdep'] ?>"><?= $count['fcdep'] ?></option>
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
        </div>

        <!-- Second Choice Department/Institute -->
        <div class="">
            <label for="" class="">Second Choice Department/Institute</label>
            <select name="cbosecond" class="custom-select">
                <option value="<?= $count['scdep'] ?>"><?= $count['scdep'] ?></option>
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
        </div>
        <!-- Third Choice Department/Institute -->
        <div class="">
            <label for="" class="">Third Choice Department/Institute</label>
            <select name="cbothird" class="custom-select">
                <option value="<?= $count['tcdep'] ?>"><?= $count['tcdep'] ?></option>
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
        </div>
        <!-- Button -->
        <br>
       <div>
            <input class="btn btn-info" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='program_data.php' " >
        </div>
    </form>
</body>
</html>