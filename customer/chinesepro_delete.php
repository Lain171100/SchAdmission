<?php

    include('connect.php');
    if(isset($_GET['cid'])){
        $data=$_GET['cid'];

        $delete="DELETE FROM c_language
                WHERE cid='$data' ";
        
        $query=mysqli_query($connection,$delete);
        if($query)
        {
            echo "<script>window.alert('Chinese Proficiency is Deleted')</script>";
            echo "<script>window.location='chinesepro_data.php'</script>";
        }
        else{
            echo "Something Went Wrong. mysqli_error($connection)";
    }
    }

    
?>