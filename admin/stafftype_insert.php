<?php
    include('connect.php');
    include('autoid_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Type Insert</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- stafftypeid(varchar30), stafftype(varchar30) -->

    <form action="stafftype_table.php" method="POST" enctype="multipart/form-data">
        <legend align="center">Staff Registration Form</legend>
        <div class="form-row">
            <div class="form-group">
                <label for="inputstaffid">Staff Type ID:</label>
                <!-- For ID, need to call SQL Name first, then table name -->
                <input type="text" class="form-control" name="txtstid" value="<?= AutoID('stafftype','stafftypeid','STID-',4) ?>" readonly>
            </div>

            <div class="form-group">
                <label for="inputstafftype">Staff Type:</label>
                <input type="text" class="form-control" name="txtstye" placeholder="Enter Staff Type" required>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" name="btnsave" value="Save">
                <input class="btn btn-danger" type="reset" name="btnreset" value="Cancel" onclick="location.href='stafftype_table.php' ">
            </div>
        </div>
    </form>
</body>
</html>