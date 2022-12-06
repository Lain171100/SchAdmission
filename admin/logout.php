<?php
    session_start();
    session_destroy();

    echo "<script>window.alert('Successfully Logout')</script>";
    echo "<script>window.location='login.php'</script>";
?>