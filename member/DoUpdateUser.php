<?php

require '../connect/connect.php';

session_start();
$name = $_POST["name"];

$target_file = basename($_FILES["photo"]["name"]);
if(file_exists($target_file)){
    die("File Exists");
}

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
    echo 'Success upload picture<br />';
}
else{
    echo 'Error<br />'. $_FILES["photo"]["error"] .'<br />';
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