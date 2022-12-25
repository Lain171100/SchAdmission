<?php
    session_start();
    include('connect.php');
    include('autoid_functions.php'); 
    // include('../admin/teacher_header.php');

    

    // Downloads files
// if (isset($_GET['file_id'])) {
//     $id = $_GET['file_id'];

    // fetch file to download from database
//     $sql = "SELECT * FROM doc_submit WHERE did=$id";
//     $result = mysqli_query($connection, $sql);
//     $count=mysqli_fetch_array($result);

//     $appform=$count['appform'];


//     $file = mysqli_fetch_assoc($result);
//     $filepath = 'pdf_file/'.$appform;

//     if (file_exists($filepath)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/pdf');
//         header('Content-Disposition: attachment; filename='.basename($filepath));
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: '.filesize('pdf_file/'.$appform));
//         readfile('pdf_file/'.$appform);

//         exit;
//     }

// }
// ?>

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
        $sql="SELECT * from doc_submit";
        $query=mysqli_query($connection,$sql);
        // 
        $count=mysqli_num_rows($query);
        // 
        while ($info=mysqli_fetch_array($query))
        {

    ?>


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
    <embed type="application/pdf" src="pdf_file/<?php echo $info['appform']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['pass']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['dip']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['transcript']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['recom']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['autobio']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['studyp']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['doc1']; ?>" width="300" height="500">
    </td>

    <td>
    <embed type="application/pdf" src="pdf_file/<?php echo $info['doc2']; ?>" width="300" height="500">
    </td>

    </tr>     
    </table>
<?php
    }
?>
</body>
</html>

