<?php
    require '../middleware/memberlogin.php';
?>

<?php
    require '../connect/connect.php';

    session_start();
    $query = 'SELECT * FROM users WHERE id="'.$_SESSION["id"].'"';

    $result = $connection->query($query);
    $row = $result->fetch_assoc();

    $query = 'SELECT * FROM profile_images WHERE user_id="'.$_SESSION["id"].'"';
    $result_photo = $connection->query($query);
    $row_photo = $result_photo->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Store</title>
    <link rel="stylesheet" href="../index.css">
    <script src="../jslib/jquery-3.3.1.js"></script>
</head>
<body>
    <!-- header -->
    <?php include '../template/header.php';?>
    <!-- main body -->
    <div class="main-body">
        <div class="form-profile">
            <form action="DoUpdateUser.php" method="post" enctype="multipart/form-data">
                <div>
                    Name:
                    <input type="text" name="name" id="name" value="<?= $row["name"]?>">
                </div>
                <div>
                    Photo:
                    <input type="file" name="photo" id="photo" value="<?= $row_photo["location"]?>">
                </div>
                <div>
                    <input type="submit" value="Update" id="btn-update">
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
</body>
<script src="EditProfile.js"></script>
</html>