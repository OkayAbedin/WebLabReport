<?php
include 'config.php';
include 'header.html';
$search = $_GET['search'];
$sql = "SELECT * FROM data WHERE roll LIKE '%$search%' or name LIKE '%$search%'";
include 'read.php';
?>