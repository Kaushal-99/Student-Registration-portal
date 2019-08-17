<?php
    include '../../backend/conn.php';
    session_start();
    $data = $_POST;
    $roll = $_SESSION['username'];
    $recpt = $data['recpt'];
    $apply = $data['apply'];
    $appid = $data['appid'];
    $appstatus = $data['appstatus'];
    $sql = "INSERT INTO admission_type VALUES ('$roll', '$recpt', '$apply', '$appid', '$appstatus')";
    $result = $conn->query($sql);
    if($result){
        echo "SUCCESS";
    }
?>