<?php

require '../connect/connect.php';

$id = $_GET["id"];

$query = "SELECT * FROM products WHERE id='$id'";
$result = $connection->query($query);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);

$connection->close();