<?php
include 'config.php';
$name = $_POST['name'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$amount = $_POST['amount'];
$paid = $_POST['paid'];
$due = $amount - $paid;

$sql = "INSERT INTO data(name, roll, course, amount, paid, due) VALUES('$name', '$roll', '$course', '$amount', '$paid', '$due')";

if($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Failed to insert data";
}

?>