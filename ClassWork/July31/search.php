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
    <table>
        <tr>
            <th>Post ID</th>
            <th>Username</th>
            <th>Post</th>
            <th>Action</th>
        </tr>

        <?php
        include "config.php";
        $search = $_GET['search'];

        $sql = "SELECT * FROM feed WHERE username LIKE '%$search%' OR post LIKE '%$search%'";
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