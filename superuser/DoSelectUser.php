<?php

require '../connect/connect.php';

if(!$connection){
    die("Connection error: ". $connection->connect_error);
}

$id = $_GET["id"];

$query = "SELECT * FROM users WHERE id='$id'";
$result = $connection->query($query);

$row = mysqli_fetch_assoc($result);

$row["password"] = base64_decode($row["password"]);

echo json_encode($row);

$connection->close();