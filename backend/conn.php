<?php
    $conn = mysqli_connect("localhost", "root", "rait@123", "student_registration");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>