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
        Success Insert feedback!
        Here's your feedback:
        <?php
            $feedback = $_GET["feedback"];
        ?>
        <script>var feedback = <?php echo json_encode($feedback)?> + "";</script>
        <div id="feedback"><?= $feedback?></div>
    </div>
    <!-- footer -->
    <?php include 'template/footer.php';?>
</body>
<script src="index.js"></script>
<script src="feedbackresult.js"></script>
</html>