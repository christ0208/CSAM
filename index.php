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
    <?php include 'template/header.php';?>
    <!-- main body -->
    <div class="main-body">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="pictures/slides-1.jpeg" style="width:100%; height: 600px;">
            </div>

            <div class="mySlides fade">
                <img src="pictures/slides-2.jpeg" style="width:100%; height: 600px;">
            </div>

            <div class="mySlides fade">
                <img src="pictures/slides-3.jpeg" style="width:100%; height: 600px;">
            </div>
        </div>        
    </div>
    <!-- footer -->
    <?php include 'template/footer.php';?>
</body>
<script src="index.js"></script>
<script src="slideshow.js"></script>
</html>