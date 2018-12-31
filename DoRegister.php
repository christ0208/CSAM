<?php

require 'connect/connect.php';

if(!$connection){
    die("Connection error: " .$connection->connect_error);
}

$email = $_POST["email"];
$password = base64_encode($_POST["password"]);
$cpassword = base64_encode($_POST["cpassword"]);
$name = $_POST["name"];
$address = $_POST["address"];
$dob = $_POST["dob"];

if($password !== $cpassword){
    die("Confirm Password is not the same with password");
}
else if(strlen($email) == 0){
    die("Fill the email");
}
else if(strlen($password) < 6){
    die("password at least 6 characters");
}
else if(strlen($name)== 0){
    die("Fill the name");
}
else if(strlen($address)== 0){
    die("Fill the address");
}
else if(strlen($dob)== 0){
    die("Fill the date of birth");
}
else{
    $query = "INSERT INTO users (id, role, email, password, name, address, dob) VALUES(uuid_v4(), 'dcf1d4c1-90f3-4b92-bd47-567bfd8ff05f', ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param('sssss', $email, $password, $name, $address, $dob);
    $statement->execute();
    echo 'Success register';
    $statement->close();
}

$connection->close();