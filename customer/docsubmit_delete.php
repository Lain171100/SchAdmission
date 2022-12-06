<?php

    include('connect.php');
    if(isset($_GET['did'])){
        $data=$_GET['did'];

        $delete="DELETE FROM doc_submit
                WHERE did='$data' ";
        
        $query=mysqli_query($connection,$delete);
        if($query)
        {
            echo "<script>window.alert('Documentation Data is Deleted')</script>";
            echo "<script>window.location='docsubmit_data.php'</script>";
        }
        else{
            echo "Something Went Wrong. mysqli_error($connection)";
    }
    }

    
?>