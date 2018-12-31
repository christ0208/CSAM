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
    <div class="header">
        <div class="left-side-header">
            <div class="title">Computer Shop</div>
        </div>
        <div class="center-side-header">
            <form action="" method="GET">
                <input type="text" name="search" class="search-text-header">
            </form>
        </div>
        <div class="right-side-header">
            <div class="text">
                <button class="btn-header" id="btn-login">Login</button>
                <button class="btn-header" id="btn-register">Register</button>
            </div>
        </div>
    </div>
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
            Confirm Password
            <input type="password" name="cpassword" id="cpassword">
        </div>
        <div>
            Name
            <input type="text" name="name" id="name">
        </div>
        <div>
            Address
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </div>
        <div>
            Date of Birth
            <input type="date" name="dob" id="dob">
        </div>
        <div>
            <button id="btn-register">Register</button>
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
            <img src="pictures/facebook.png" alt="" class="social-media-logo">
            <img src="pictures/twitter.png" alt="" class="social-media-logo">
            <img src="pictures/instagram.jpeg" alt="" class="social-media-logo">
        </div>
    </div>
</body>
<script src="index.js"></script>
<script src="register.js"></script>
</html>