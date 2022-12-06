<?php
    include('connect.php');
    include('autoid_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Proficiency</title>
</head>
<body>
    <form action="chinesepro_data.php" method="POST" enctype="multipart/form-data">
        <legend>IV. Chinese Proficiency Level</legend>
    <div>
        <div>
            <label for="">Chinese Language ID</label>
            <input type="text" name="txtcid" placeholder="" value="<?= AutoID('c_language','cid','CTU-',4) ?>" readonly>
        </div>

        <div>
            <label for="">1.How Long Have You Studied Chinese?</label>
            <input type="text" name="txtyear" value="" placeholder="Year That You Studied Chinese" required>
        </div>

        <div>
            <label for="">2.Organization or Place Where You Studied Chinese?</label>
            <input type="text" name="txtplace" value="" placeholder="Place That You Studied Chinese" required>
        </div>

        <div class="">
            <label for="" class="">Listening</label>
            <select name="cbolistening" class="" required>
               <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Speaking</label>
            <select name="cbospeaking" class="">
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Reading</label>
            <select name="cboreading" class="">
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div class="">
            <label for="" class="">Writing</label>
            <select name="cbowriting" class="">
                <option value="">Choose One Level</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
        </div>

        <div>
            <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='chinesepro_data.php' " >
        </div>
    </div>
    </form>
</body>
</html>