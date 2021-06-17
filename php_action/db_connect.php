<?php

$localhost = "127.0.0.1";
$username = "285563";
$password = "123456";
$dbname = "285563";

//create database connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>