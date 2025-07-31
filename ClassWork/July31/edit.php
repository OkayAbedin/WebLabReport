<?php
include "config.php";
$id = $_GET['id'];

$sql = "SELECT * FROM feed WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab6 </title>
    <style>
    table,
    tr,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 0px 5px;
    }
    </style>
</head>

<body>
    <form class="form" action="set.php" method="POST">
        <fieldset>
            <legend>Reg form</legend>
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <input type="text" name="uname" value="<?=$row['username']?>">
            <br><br>
            <textarea id="posts" cols="30" rows="10" name="posts"><?=$row['post']?></textarea>
            <br><br>
            <input type="submit" value="Update">
        </fieldset>
    </form>

</body>

</html>