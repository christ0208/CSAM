<?php

require '../connect/connect.php';

session_start();
$name = $_POST["name"];

$target_file = "upload/" . $_SESSION["id"] . ".png";
if(file_exists($target_file)){
    die("File Exists");
}

var_dump($_FILES["photo"]);
if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
    echo 'Success upload picture';
}
else{
    echo 'Error';
}

$query = 'INSERT INTO profile_images VALUES(uuid_v4(), ?, ?)';
$statement = $connection->prepare($query);
$statement->bind_param('ss', $_SESSION["id"], $target_file);
$statement->execute();

$query = 'UPDATE users SET name=? WHERE id = ?';
$statement = $connection->prepare($query);
$statement->bind_param('ss', $name, $_SESSION["id"]);
$statement->execute();

echo 'Success upload file';