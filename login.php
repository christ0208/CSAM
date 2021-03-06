<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Store</title>
    <link rel="stylesheet" href="index.css">
    <script src="jslib/jquery-3.3.1.js"></script>
</head>
<body>
    <!-- header -->
    <?php include 'template/header.php'; ?>
    <!-- main body -->
    <div class="main-body">
        <div>
            Email
            <input type="email" name="email" id="email">
        </div>
        <div>
            Password
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button id="btn-login">Log In</button>
        </div>
    </div>
    <!-- footer -->
    <?php include 'template/footer.php'; ?>
</body>
<script src="index.js"></script>
<script src="login.js"></script>
</html>