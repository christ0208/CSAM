<?php

require '../connect/connect.php';

$id = $_POST["id"];
$category = $_POST["category"];
$user = $_POST["user"];
$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$query = "UPDATE products SET category_id=?, user_id=?, name=?, description=?, price=?, stock=? WHERE id=?";
$statement = $connection->prepare($query);
$statement->bind_param('ssssiis', $category, $user, $name, $description, $price, $stock, $id);
$statement->execute();

echo 'Success update';

$statement->close();
$connection->close();