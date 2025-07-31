<?php
include "config.php";

$user = $_POST['uname'];
$post = $_POST['posts'];

$sql = "INSERT INTO feed(username, post) VALUES('$user', '$post')";

if($conn->query($sql)===TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Failed";
}
?>