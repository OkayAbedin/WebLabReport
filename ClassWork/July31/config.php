<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error) {
    echo "Connection Failed".$conn->connect_error;
}
?>