<?php
include 'config.php';
include 'header.html';
$id = $_GET['id'];
$sql = "SELECT * FROM data WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>" >
        <div class="formItem">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?=$row['name']?>" required>
        </div>
        <div class="formItem">
            <label for="roll">Roll:</label>
            <input type="text" name="roll" id="roll" value="<?=$row['roll']?>" required>
        </div>
        <div class="formItem">
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" value="<?=$row['course']?>" required>
        </div>
        <div class="formItem">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" value="<?=$row['amount']?>" required>
        </div>
        <div class="formItem">
            <label for="paid">Paid:</label>
            <input type="number" name="paid" id="paid" value="<?=$row['paid']?>" required>
        </div>
        <div class="formButton">
            <input type="submit" value="Update Record">
        </div>
    </form>
</body>
</html>