<?php
include 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$amount = $_POST['amount'];
$paid = $_POST['paid'];
$due = $amount - $paid;

$sql = "UPDATE data set name='$name', roll='$roll', course='$course', amount='$amount', paid='$paid', due='$due' WHERE id = '$id'";

if($conn->query($sql) === TRUE) {
    header('Location: view.php');
} else {
    echo "Failed to update data";
}
?>