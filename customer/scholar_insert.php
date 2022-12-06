<?php
    include('connect.php');
    include('autoid_functions.php');
    include('../admin/teacher_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css">
</head>
<body>
    <form action="scholar_data.php" method="POST" enctype="multipart/form-data">
    <legend>Scholarship Information and Financial Statement</legend>

    <label for="">1. Please State Your Source of Financial Support while furthering your Education in the Republic of China (Taiwan)</label>

    <div>
            <label for=""><b>Choose and Fill Program</b></label>
        </div>
            <!-- Scholar ID -->
        <div>
            <label for="">Scholar ID:</label>
            <input class="form-control" type="text" name="txtslid" value="<?= AutoID('scholar','slid','SLID-',4) ?>" readonly>
        </div> 

            <!-- Personal Saving Money -->
        <div class="">
            <label for="" class="">Choose Your Personal Saving Amount</label>
            <select name="cbopmoney" class="">
                <option value="">Choose Money Amount</option>
                <option value="US$0 - US$99">US$0 - US$99</option>
                <option value="US$100 - US$1000">US$100 - US$1000</option>
                <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                <option value="US$9100 - US$10000">US$9100 - US$10000</option>
            </select>
        </div>


           <!-- Saving Money From Parents -->
        <div class="">
            <label for="" class="">Choose Your Saving Money From Parents </label>
            <select name="cbofmoney" class="">
                <option value="">Choose Money Amount</option>
                <option value="US$0 - US$99">US$0 - US$99</option>
                <option value="US$100 - US$1000">US$100 - US$1000</option>
                <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                <option value="US$9100 - US$10000">US$9100 - US$10000</option>
            </select>
        </div>


           <!-- Scholarships Amount -->
        <div class="">
            <label for="" class="">Choose Your Scholarship Amount </label>
            <select name="cbosmoney" class="">
                <option value="">Choose Money Amount</option>
                <option value="US$0 - US$99">US$0 - US$99</option>
                <option value="US$100 - US$1000">US$100 - US$1000</option>
                <option value="US$1100 - US$2000">US$1100 - US$2000</option>
                <option value="US$2100 - US$3000">US$2100 - US$3000</option>
                <option value="US$3100 - US$4000">US$3100 - US$4000</option>
                <option value="US$4100 - US$5000">US$4100 - US$5000</option>
                <option value="US$5100 - US$6000">US$5100 - US$6000</option>
                <option value="US$6100 - US$7000">US$6100 - US$7000</option>
                <option value="US$7100 - US$8000">US$7100 - US$8000</option>
                <option value="US$8100 - US$9000">US$8100 - US$9000</option>
                <option value="US$9100 - US$10000">US$9100 - US$10000</option>
            </select>
        </div>


        <!-- Choose Scholarship Department or Organization -->
        <div class="">
            <label for="" class="">Choose Scholarship Department or Organization</label>
            <select name="cboorg" class="">
                <option value="">Choose Organization</option>
                <option value="MOE (Ministry of Education)">MOE (Ministry of Education)</option>
                <option value="MOFA (Ministry of Foreign Affairs)">MOFA (Ministry of Foreign Affairs)</option>
                <option value="TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)">TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)</option>
                <option value="From School">From School</option>
            </select>
        </div>


        <!-- Health Condition-->
        <div class="">
            <label for="" class="">Choose Your Health Condition</label>
            <br>
            <label for="">Good</label>
            <input type="radio" name="rdoh" value="Good">
            <label for="">Average</label>
            <input type="radio" name="rdoh" value="Average">
            <label for="">Poor</label>
            <input type="radio" name="rdoh" value="Poor">
        </div>

        <!-- Health Problem -->
        <div class="">
            <label for="" class="">Describe any Defect or Health Problem You Have</label>
            <input type="text" name="txthpbl" placeholder="Enter Your Health Problem">
        </div>

        <!-- Want to Apply Scholarship? -->
        <div class="">
            <label for="" class="">Do You Want to Apply Scholarship?</label>
            <select name="cbowas" class="">
                <option value="">Choose Want to Apply Scholarship or Not</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
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