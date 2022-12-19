<?php
    
    include('connect.php');
    include('autoid_functions.php');
    include('../admin/teacher_header.php');

    if(isset($_REQUEST['slid']))
    {
        $data=$_REQUEST['slid'];

        $sql="SELECT * FROM scholar
              WHERE slid='$data'  ";
        
        $query=mysqli_query($connection,$sql);
        $count=mysqli_fetch_array($query);
        

    }

    if(isset($_POST['btnupdate']))
    {
        $txtslid=$_POST['txtslid'];
        $cbopmoney=$_POST['cbopmoney'];
        $cbofmoney=$_POST['cbofmoney'];
        $cbosmoney=$_POST['cbosmoney'];
        $cboorg=$_POST['cboorg'];
        $cbohealth=$_POST['cbohealth'];
        $txthpbl=$_POST['txthpbl'];
        $cbowas=$_POST['cbowas'];


        $update="UPDATE scholar
                 SET pmoney='$cbopmoney',
                     fmoney='$cbofmoney',
                     smoney='$cbosmoney',
                     schscholar='$cboorg',
                     health_condi='$cbohealth',
                     health_problem='$txthpbl',
                     scholar_apply='$cbowas'
                 WHERE slid='$txtslid' ";
        $query=mysqli_query($connection,$update);
        if($query)
        {
            echo "<script>window.alert('Financial Information and Scholar Information are Updated')</script>";
            echo "<script>window.location='scholar_data.php'</script>";
        }
        else{
            echo "<p>Something Went Wrong in Financial Information and Scholar Information Update".mysqli_error($connection)."</p>";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Information and Scholar Information Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css"> 
</head>
<body>

    <form action="scholar_update.php" method="POST" enctype="multiplepart/form-data">
<legend>Update Information about Scholarship Information and Financial Statement</legend>

    <label for="">1. Please State Your Source of Financial Support while furthering your Education in the Republic of China (Taiwan)</label>

    <div>
            <label for=""><b>Choose and Fill Program</b></label>
        </div>
            <!-- Scholar ID -->
        <div>
            <label for="">Scholar ID:</label>
            <input class="form-control" type="text" name="txtslid" value="<?= $count['slid'] ?>" readonly>
        </div> 

            <!-- Personal Saving Money -->
        <div class="">
            <label for="" class="">Choose Your Personal Saving Amount</label>
            <select name="cbopmoney" class="custom-select">
                <option value="<?= $count['pmoney'] ?>"><?= $count['pmoney'] ?></option>
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
            <select name="cbofmoney" class="custom-select">
                <option value="<?= $count['fmoney'] ?>"><?= $count['fmoney'] ?></option>
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
            <select name="cbosmoney" class="custom-select">
                <option value="<?= $count['smoney'] ?>"><?= $count['smoney'] ?></option>
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
            <select name="cboorg" class="custom-select">
                <option value="<?= $count['schscholar'] ?>"><?= $count['schscholar'] ?></option>
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
             <?php if($count['health_condi']=="Good")
            {?>
            <label for="">Good:</label>
            <input type="radio" name="rdoh" value="Good" checked>
            
            <label for="">Average:</label>
            <input type="radio" name="rdoh" value="Average">
            <label for="">Poor:</label>
            <input type="radio" name="rdoh" value="Poor">

            <?php
            }
            ?>
            <!-- Average -->
            <?php if($count['health_condi']=="Average")
            {?>
            <label for="">Good:</label>
            <input type="radio" name="rdoh" value="Good" >
            
            <label for="">Average:</label>
            <input type="radio" name="rdoh" value="Average" checked>
            <label for="">Poor:</label>
            <input type="radio" name="rdoh" value="Poor">

            <?php
            }
            ?>
            <!-- Poor -->
            <?php if($count['health_condi']=="Poor")
            {?>
            <label for="">Good:</label>
            <input type="radio" name="rdoh" value="Good">
            
            <label for="">Average:</label>
            <input type="radio" name="rdoh" value="Average">
            <label for="">Poor:</label>
            <input type="radio" name="rdoh" value="Poor" checked>

            <?php
            }
            ?>
        </div>

        <!-- Health Problem -->
        <div class="">
            <label for="" class="">Describe any Defect or Health Problem You Have</label>
            <input type="text" class="form-control" name="txthpbl" value="<?= $count['health_problem'] ?>" placeholder="Enter Your Health Problem">
        </div>

        <!-- Want to Apply Scholarship? -->
        <div class="">
            <label for="" class="">Do You Want to Apply Scholarship?</label>
           <?php if($count['scholar_apply']=="Yes")
            {?>
            <label for="">Yes:</label>
            <input type="radio" name="cbowas" value="Yes" checked>
            
            <label for="">No:</label>
            <input type="radio" name="cbowas" value="No">
            <?php
            }
            ?>
            <!-- No -->
             <?php if($count['scholar_apply']=="No")
            {?>
            <label for="">No:</label>
            <input type="radio" name="cbowas" value="No" checked>
            
            <label for="">Yes:</label>
            <input type="radio" name="cbowas" value="Yes">
            <?php
            }
            ?>
        
            
        </div>
       
        <!-- Button -->
       <div>
            <input class="btn btn-info" type="submit" name="btnupdate" value="Update">
            <input class="btn btn-danger" type="reset" name="btncancel" value="Cancel" onclick="location.href='scholar_data.php' " >
        </div>
    </form>
</body>
</html>


