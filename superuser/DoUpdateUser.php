<?php

require '../connect/connect.php';

if(!$connection){
    die("Connection failed: ". mysqli_connect_error());
}

$id = $_POST['id'];
$role = $_POST['role'];
$email = $_POST['email'];
$password = base64_encode($_POST['password']);
$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];

if(strlen($id) == 0 || strlen($password) == 0 || strlen($name) == 0 || strlen($address) == 0) die("Fill the form");

$query = "UPDATE users set role=?, email=?, password=?, name=?, address=?, dob=? WHERE id=?";
$statement = $connection->prepare($query);
$statement->bind_param('sssssss', $role, $email, $password, $name, $address, $dob, $id);
$statement->execute();

$statement->close();
$connection->close();

echo 'Success Update Data';