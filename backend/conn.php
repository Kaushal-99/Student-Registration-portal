<?php
    $conn = mysqli_connect("localhost", "root", "", "student_registration");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>