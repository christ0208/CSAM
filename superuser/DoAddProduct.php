<?php

require '../connect/connect.php';

$name = $_POST["name"];
$category = $_POST["category"];
$user = $_POST["user"];
$description = $_POST["description"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$query = "INSERT INTO products VALUES(uuid_v4(), ?, ?, ?, ?, ?, ?)";
$statement = $connection->prepare($query);
$statement->bind_param('ssssii', $category, $user, $name, $description, $price, $stock);
$statement->execute();

echo 'Success insert';

$statement->close();
$connection->close();