<?php
    require '../middleware/memberlogin.php';
?>

<?php
    require '../connect/connect.php';

    session_start();
    if(!$connection){
        die("Connect error: ". $connection->connect_error);
    }

    $query = 'SELECT * FROM profile_images WHERE user_id="'.$_SESSION["id"].'"';
    $query_user = 'SELECT * FROM users WHERE id="'.$_SESSION["id"].'"';
    $result_photo = $connection->query($query);
    $result_user = $connection->query($query_user);

    if($result_user->num_rows > 0){
        $row_user = $result_user->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Store</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="ProfilePage.css">
    <script src="../jslib/jquery-3.3.1.js"></script>
</head>
<body>
    <!-- header -->
    <?php include '../template/header.php';?>
    <!-- main body -->
    <div class="main-body">
        <div class="profile-page">
            <div class="header-profile-page">
                <div class="image-profile">
                    <?php
                        if($result_photo->num_rows > 0){
                            $diff = $result_photo->num_rows - 1;
                            $row = '';
                            while($diff){
                                $row = $result_photo->fetch_assoc();
                                $diff--;
                            }
                            
                            $row = $result_photo->fetch_assoc();
                            echo '<img src="'.$row["location"].'" id="profile-picture" />';
                        }
                        else{
                            echo '<img src="../uploads/unknown.jpeg" id="profile-picture" />';
                        }
                    ?>
                </div>
                <div class="name-profile">
                    <?php 
                        echo $row_user["name"];
                    ?>
                    <button id="edit-profile">Edit Profile</button>
                </div>
            </div>
            <div class="body-profile-page">
                <div>
                    Email:
                    <?= $row_user["email"];?>
                </div>
                <div>
                    Address:
                    <?= $row_user["address"];?>
                </div>
                <div>
                    Date of Birth:
                    <?= $row_user["dob"];?>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="left-side-footer">
            <div class="text">
                Computer Shop
            </div>
        </div>
        <div class="right-side-footer">
            <div>
                Follow us in:
            </div>
            <img src="../pictures/facebook.png" alt="" class="social-media-logo">
            <img src="../pictures/twitter.png" alt="" class="social-media-logo">
            <img src="../pictures/instagram.jpeg" alt="" class="social-media-logo">
        </div>
    </div>
</body>
<script src="ProfilePage.js"></script>
</html>