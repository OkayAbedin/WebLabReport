<?php
    include "connect.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];

    $query = "INSERT INTO contact(fname, lname, email, subject, message, phone, website) VALUES('$fname', '$lname', '$email', '$subject', '$message', '$phone', '$website')";

    $run = mysqli_query($con, $query);

    if(!$run) {
    echo "Submission Failed";
    } else {
    echo "Thanks for connect with us. We will contact you soon.";
    }
?>