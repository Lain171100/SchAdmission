<?php
    include('connect.php');

    $data=$_GET['stafftypeid'];

    $delete="DELETE FROM stafftype
             WHERE stafftypeid='$data' ";

    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Staff Type is Deleted')</script>";
        echo "<script>window.location='stafftype_table.php'</script>";
    }
    else{
        echo "Something Went Wrong.mysqli_error($connection)";
    }

?>