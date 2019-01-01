<?php
    require 'connect/connect.php';

    if(!$connection){
        die('Connect error: '. $connection->connect_error);
    }

    $search = $_GET["search"];

    // Injection => asd') OR 1=1#
    $query = "SELECT p.name ProductName, c.name CategoryName FROM products p, categories c WHERE p.category_id = c.id AND (p.name LIKE '%$search%' OR c.name LIKE '%$search%')";
    
    $result = $connection->query($query);
?>

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
        <div class="search-results">
            <?php 
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<div><div class="product-name">'.$row["ProductName"].'</div><div class="category-name">Category: '.$row["CategoryName"].'</div></div>';
                    }
                }
                else{
                    echo 'No results';
                }
            ?>
        </div>
    </div>
    <!-- footer -->
    <?php include 'template/footer.php';?>
</body>
<script src="index.js"></script>
<script src="slideshow.js"></script>
</html>