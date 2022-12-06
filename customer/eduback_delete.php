<?php
    include('connect.php');

    $data=$_GET['eid'];

    $delete="DELETE FROM eduback
             WHERE eid='$data' ";
    
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Education Background Information Data is Deleted')</script>";
        echo "<script>window.location='eduback_data.php'</script>";
    }
    else{
        echo "Something Went Wrong. mysqli_error($connection)";
    }
?>