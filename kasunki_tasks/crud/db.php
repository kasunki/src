<?php
/* 
$servername = "php24-db-1";
$username = "app1";
$password = "kasunki";
$dbname = "app1"; 
*/

$servername = "localhost";
$username = "kasunki23000";
$password = "HYu1NbvE";
$dbname = "wp_kasunki23000";


//create database connection
$conn = new mysqli($servername,$username,$password,$dbname);

// check connection
if ($conn->connect_error) {
    die("Connection Failed:". $conn->connect_error);
}
?>