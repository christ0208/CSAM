<?php

require '../connect/connect.php';

$id = $_POST["id"];

$query = "DELETE FROM categories WHERE id=?";
$statement = $connection->prepare($query);
$statement->bind_param('s', $id);

$statement->execute();

echo 'Success delete';

$statement->close();
$connection->close();