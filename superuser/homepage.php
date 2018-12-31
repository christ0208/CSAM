<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Shop</title>
    <link rel="stylesheet" href="homepage.css">
    <script src="../jslib/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="container-first">
        <div class="container-second">
            <?php include 'navigationbar.php';?>
            <div class="body-side">
                <div class="welcoming-part">
                    Welcome, <?php echo $_SESSION["name"]; ?>!
                </div>
                <div class="flag">
                    <?php if($_SESSION["role"] == 'e586b774-e4b5-429c-8f37-512fe7cb936e') echo 'FLAG{sqli_d4ng3rous_8bca2}'; ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="homepage.js"></script>
</html>