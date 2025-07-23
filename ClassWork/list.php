<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    include "connect.php";

    $query = "SELECT * FROM info";
    $run = mysqli_query($con, $query);

    if(mysqli_num_rows($run)>0) {
        echo "<table>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>";
        while($row = mysqli_fetch_assoc($run)) {
            echo "<tr><td>".$row['username']."</td><td>".$row['password'].'</td></tr>';
        }
        echo "</table>";
    }
?>