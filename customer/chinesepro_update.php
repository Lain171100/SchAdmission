<?php
    
    include('connect.php');
    include('../admin/teacher_header.php');

    if(isset($_REQUEST['cid']))
    {
        $data=$_REQUEST['cid'];

        $sql="SELECT * FROM c_language
              WHERE cid='$data'  ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);
        

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

        $update="UPDATE c_language
                 SET ctime='$txtyear',
                     cplace='$txtplace',
                     listening='$cbolistening',
                     speaking='$cbospeaking',
                     reading='$cboreading',
                     writing='$cbowriting'
                 WHERE cid='$txtcid' ";
        $query=mysqli_query($connection,$update);
        if($query)
        {
            echo "<script>window.alert('Chinese Proficiency Level  is Updated')</script>";
            echo "<script>window.location='chinesepro_data.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Staff Update".mysqli_error($connection)."</p>";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Proficiency Update</title>
    <!-- <link rel="stylesheet" href="formstyle.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> 
</head>
<body>

    <form action="chinesepro_update.php" method="POST" enctype="multiplepart/form-data">

        <legend>IV. Chinese Proficiency Level</legend>
    <div>
        <div>
            <label for="">Chinese Language ID</label>
            <input type="text" class="form-control" name="txtcid" placeholder="" value="<?= $count['cid'] ?>" readonly>
        </div>

        <div>
            <label for="">1.How Long Have You Studied Chinese?</label>
            <input type="text" class="form-control" name="txtyear" value="<?= $count['ctime'] ?>" placeholder="Year That You Studied Chinese" required>
        </div>

        <div>
            <label for="">2.Organization or Place Where You Studied Chinese?</label>
            <input type="text" class="form-control" name="txtplace" value="<?= $count['cplace'] ?>" placeholder="Place That You Studied Chinese" required>
        </div>
        
        <div class="">
            <label for="" class="">Listening</label>
            <select name="cbolistening" class="custom-select"  required>
                <option value="<?= $count['listening'] ?>"><?= $count['listening'] ?></option>
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Speaking</label>
            <select name="cbospeaking" class="custom-select">
                <option value="<?= $count['speaking'] ?>"><?= $count['speaking'] ?></option>
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Reading</label>
            <select name="cboreading" class="custom-select">
                 <option value="<?= $count['reading'] ?>"><?= $count['reading'] ?></option>
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Writing</label>
            <select name="cbowriting" class="custom-select">
                 <option value="<?= $count['writing'] ?>"><?= $count['writing'] ?></option>
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <br>
        <div>
            <input class="btn btn-info" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='chinesepro_data.php' ">
        </div>

    </form>
</body>
</html>


