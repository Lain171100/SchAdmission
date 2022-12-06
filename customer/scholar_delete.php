<?php
    include('connect.php');

    $data=$_GET['slid'];

    $delete="DELETE FROM scholar
             WHERE slid='$data' ";
    
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Scholar Information Data is Deleted')</script>";
        echo "<script>window.location='scholar_data.php'</script>";
    }
    else{
        echo "Something Went Wrong. mysqli_error($connection)";
    }
?>