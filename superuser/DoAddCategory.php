<?php

require '../connect/connect.php';

if(!$connection){
    die("Connection error: ". $connection->connect_error);
}

$name = $_POST["name"];

$query = "INSERT INTO categories VALUES(uuid_v4(), ?)";
$statement = $connection->prepare($query); 
$statement->bind_param('s', $name);

$statement->execute();

echo 'Success insert';

$statement->close();
$connection->close();