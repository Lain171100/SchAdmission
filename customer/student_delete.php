<?php
    include('connect.php');

    $data=$_GET['stuid'];

    $delete="DELETE FROM student
             WHERE stuid='$data' ";
    
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Student Information Data is Deleted')</script>";
        echo "<script>window.location='student_data.php'</script>";
    }
    else{
        echo "Something Went Wrong. mysqli_error($connection)";
    }
?>