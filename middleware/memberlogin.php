<?php

session_start();

if($_SESSION["login"] != 1){
    header("Location: http://".$_SERVER["http_host"].'/login.php');
}