<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Course</th>
            <th>Fee Amount</th>
            <th>Fee Paid</th>
            <th>Fee Due</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        $result = $conn->query($sql);
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row['name']?></td>
                <td><?=$row['roll']?></td>
                <td><?=$row['course']?></td>
                <td><?=$row['amount']?></td>
                <td><?=$row['paid']?></td>
                <td><?=$row['due']?></td>
                <td><a href="edit.php?id=<?=$row['id']?>">Edit</a></td>
                <td><a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
            </tr>
            <?php }
        } else {
            echo "Nothing to show";
        }
        ?>
    </table>
</body>
</html>