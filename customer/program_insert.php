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
    <title>Choose Department</title>
</head>
<body?>
    <form action="program_data.php" method="POST" enctype="multipart/form-data">
    
        <legend><b>Please Indicate to which department and program you are applying at NCNU</b></legend>
        <div>
            <label for=""><b>Choose and Fill Program</b></label>
        </div>
            <!-- Program ID -->
        <div>
            <label for="">Program ID:</label>
            <input class="form-control" type="text" name="txtpid" value="<?= AutoID('program','pid','PID-',4) ?>" readonly>
        </div> 
            <!-- Choose Season -->
        <div class="">
            <label for="" class="">Choose Season:</label>
            <select name="cboseason" class="">
                <option value="">Choose One Season</option>
                <option value="Spring">Spring</option>
                <option value="Fall">Fall</option>
            </select>
        </div>

        <!-- Choose Education Level -->
        <div class="">
            <label for="" class="">Choose Education Level That You Want To Apply:</label>
            <select name="cbolevel" class="">
                <option value="">Choose One Level</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="PhD">Doctoral(PhD)</option>
            </select>
        </div>

        <!-- First Choice -->
        <div class="">
            <label for="" class="">First Choice Department/Institute</label>
            <select name="cbofirst" class="">
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
            <select name="cbosecond" class="">
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
            <select name="cbothird" class="">
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
       <div>
            <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='program_data.php' " >
        </div>
</form>
</body>
</html>