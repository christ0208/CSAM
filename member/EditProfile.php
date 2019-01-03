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
            <div>
                Name:
                <input type="text" name="name" id="name">
            </div>
            <div>
                Photo:
                <input type="file" name="photo" id="photo">
            </div>
            <div>
                <button id="btn-update">Update</button>
            </div>
        </div>
    </div>
    <!-- footer -->
</body>
<script src="EditProfile.js"></script>
</html>