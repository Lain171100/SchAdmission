<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php'); 
    include('../admin/staff_header.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css">
</head>
<body>
    <?php

    if(isset($_GET['did']))
    {
        $did=$_GET['did'];
        $sql="SELECT * from doc_submit
              WHERE did='$did' ";
        $query=mysqli_query($connection,$sql);
        // 
        $count=mysqli_num_rows($query);
        // 
        while ($info=mysqli_fetch_array($query))
        {


    ?>

 <div class="table-responsive">
    <table>
    
    <tr>
        <th>Application Form</th>
        <th>Passport</th>
        <th>Diploma</th>
        <th>Transcript</th>
        <th>Recommendation Letter</th>
        <th>Auto Biography</th>
        <th>Study Plan</th>
        <th>Document Requirement By Department 1</th>
        <th>Document Requirement By Department 2</th>

    </tr>

    <tr>
    
    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['appform']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['pass']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['dip']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['transcript']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['recom']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['autobio']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['studyp']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['doc1']; ?>" width="300" height="400">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['doc2']; ?>" width="300" height="400">
    </td>

    </tr>     
    </table>
    </div>
<?php
    }
    }
?>
</body>
</html>

