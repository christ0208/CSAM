<?php

require '../connect/connect.php';

if(!$connection){
    die("Connection error: " . $connection->connect_error);
}

$id = $_POST["id"];

$query = "DELETE FROM users WHERE id=?";
$statement = $connection->prepare($query);
$statement->bind_param('s', $id);

$statement->execute();

echo 'Success delete data';
$statement->close();
$connection->close();