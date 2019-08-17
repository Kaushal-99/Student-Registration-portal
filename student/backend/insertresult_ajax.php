<?php
    include '../../backend/conn.php';
    session_start();
    $data = $_POST;
    $roll = $_SESSION['username'];
    $seat = $data['seat'];
    $month = $data['month'];
    $pointer = $data['pointer'];
    $kt = $data['kt'];
    $sql = "INSERT INTO form(roll,seat_no,month_year,pointer,kt) VALUES ('$roll', '$seat', '$month', '$pointer', '$kt')";
    $result = $conn->query($sql);
    if($result){
        echo "SUCCESS";
    }
?>