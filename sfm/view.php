<?php
include 'header.html';
include 'config.php';
$sql = "SELECT * FROM data";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method = 'get'>
        <input type="text" name="search" placeholder="Search by name or roll...">
        <input type="submit" value="Search">
    </form>
</body>
</html>

<?php
include 'read.php';
?>