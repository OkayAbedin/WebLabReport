<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id = '$id'";
if($conn->query($sql) === TRUE ){
    header('Location: view.php');
}
?>