<?php
    session_start();
    session_destroy();

    echo "<script>window.alert('Logout Successfully')</script>";
    echo "<script>window.location='student_login.php'</script>";
?>