<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM feed WHERE id='$id'";
if($conn->query($sql)===TRUE) {
    header("Location: index.php");
    exit;
}else {
    echo "Failed";
}
?>