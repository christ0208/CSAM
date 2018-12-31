<?php

require '../connect/connect.php';

$id = $_POST["id"];
$name = $_POST["name"];

$query = "UPDATE categories SET name=? WHERE id=?";
$statement = $connection->prepare($query);
$statement->bind_param('ss', $name, $id);

$statement->execute();

echo 'Success update';

$statement->close();
$connection->close();