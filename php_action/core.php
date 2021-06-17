<?php

session_start();

require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
    header('location: http://localhost:8080/market/anasayfa.php');
}





?>