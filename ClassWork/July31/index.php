<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab6 </title>
    <link rel="stylesheet" href="style.css">
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
    <div class="header">
        <div class="left">
            <img src="logo.png" alt="logo" height=24px>
        </div>
        <div class="mid">
            <form action="search.php" method="GET">
                <input class="searchbar" type="text" id="search" name="search" placeholder="Search something">
                <input class="searchButton" type="submit" value="Search">
            </form>
        </div>
        <div class="right">
            <a href="">About</a>
            <a href="">Contact</a>
        </div>
    </div>

    <div class="makePost">
        <form class="form" action="insert.php" method="POST">
            <div>
                <input class="formField" type="text" name="uname" placeholder="Enter your username">
            </div>
            <div>
                <textarea class="formText"  id="posts" name="posts" placeholder="Whats on your mind?"></textarea>
            </div>
            <div>
                <input class="postButton" type="submit" value="Post">
            </div>

        </form>
    </div>
    <table>
        <tr>
            <th>Post ID</th>
            <th>Username</th>
            <th>Post</th>
            <th>Action</th>
        </tr>

        <?php
    include "config.php";

    $sql = "SELECT * FROM feed";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['post'] ?></td>
            <td><a href="edit.php?id=<?=$row['id']?>">Edit</a> | <a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
        </tr>
        <?php
        }
    }
    ?>
    </table>

</body>

</html>