<?php
    include('connect.php');

    $data=$_GET['staffid'];

    $delete="DELETE FROM staff
             WHERE staffid='$data' ";
    
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Staff Account is Deleted')</script>";
        echo "<script>window.location='staff_table.php'</script>";
    }
    else{
        echo "Something Went Wrong. mysqli_error($connection)";
    }
?>