<?php

    include 'connect.php';

    $un = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO info(username, password) 
                VALUES('$un', '$pass')";
    $run = mysqli_query($con, $query);
    // if(!$run){
    //     echo "submission failed!";
    // } else{
    //     echo "<br>connection successful!";
    // }
?>