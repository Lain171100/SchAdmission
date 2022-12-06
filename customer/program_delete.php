<?php
    include('connect.php');

    $data=$_GET['pid'];

    $delete="DELETE FROM program
             WHERE pid='$data' ";
    
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Program Data is Deleted')</script>";
        echo "<script>window.location='program_data.php'</script>";
    }
    else{
        echo "Something Went Wrong. mysqli_error($connection)";
    }
?>