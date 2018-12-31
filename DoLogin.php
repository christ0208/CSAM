<?php

require 'connect/connect.php';

if(!$connection){
    die("Connection error: ".$connection->connect_error);
}

$email = $_POST["email"];
$password = base64_encode($_POST["password"]);

$selected_role = '';
$selected_email = '';
$selected_name = '';
$selected_address = '';
$selected_dob = '';

$query = "SELECT role, email, name, address, dob FROM users WHERE email=? AND password=?";
$statement = $connection->prepare($query);
$statement->bind_param('ss', $email, $password);

$statement->execute();
$statement->bind_result($selected_role, $selected_email, $selected_name, $selected_address, $selected_dob);
$statement->store_result();

if($statement->num_rows > 0){
    $statement->fetch();

    session_start();
    $_SESSION["login"] = 1;
    $_SESSION["role"] = $selected_role;
    $_SESSION["email"] = $selected_email;
    $_SESSION["name"] = $selected_name;
    $_SESSION["address"] = $selected_address;
    $_SESSION["dob"] = $selected_dob;

    if($selected_role === 'e586b774-e4b5-429c-8f37-512fe7cb936e'){
        echo 'Superuser';
    }
    else if($selected_role === '7e069b7a-8f50-4e0b-8d3f-fa2334c4196b'){
        echo 'Admin';
    }
    else {
        echo 'Member';
    }
}
else{
    echo 'Not found';
}

$statement->close();
$connection->close();