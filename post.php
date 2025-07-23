<?php
    include "connect.php";

    $username = $_POST['username'];
    $title = $_POST['title'];
    $post = $_POST['post'];

    $query = "INSERT INTO blogs(username, title, post) VALUES('$username', '$title', '$post')";

    $run = mysqli_query($con, $query);

    if(!$run) {
    echo "Submission Failed";
    } else {
    echo "Post submitted.";
    }
?>