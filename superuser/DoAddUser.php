<?php

require '../connect/connect.php';

if(!$connection){
    die("Connection failed: ". mysqli_connect_error());
}

$role = $_POST['role'];
$email = $_POST['email'];
$password = base64_encode($_POST['password']);
$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];

if(strlen($password) == 0 || strlen($name) == 0 || strlen($address) == 0) die("Fill the form");

$query = "INSERT INTO users (id, role, email, password, name, address, dob) 
        VALUES(uuid_v4(),?,?,?,?,?,?)";
$statement = $connection->prepare($query);
$statement->bind_param('ssssss', $role, $email, $password, $name, $address, $dob);
$statement->execute();

$statement->close();
$connection->close();

echo 'Success Insert data';