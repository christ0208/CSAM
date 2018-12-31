<?php
session_start();
if($_SESSION["role"] !== 'e586b774-e4b5-429c-8f37-512fe7cb936e'){
    header('Location: http://'.$_SERVER["HTTP_HOST"]);
}