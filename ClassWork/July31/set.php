<?php
include "config.php";

$id = $_POST['id'];
$user = $_POST['uname'];
$post = $_POST['posts'];

$sql = "UPDATE feed SET username = '$user', post = '$post' WHERE id = '$id'";


if($conn->query($sql)===TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Failed";
}
?>