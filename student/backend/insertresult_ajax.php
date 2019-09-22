<?php
    include '../../backend/conn.php';
    session_start();
    $data = $_POST;
    $roll = $_SESSION['username'];
    $seat = $data['seat'];
    $id=$roll."+".$seat;
    $month = $data['month'];
    $sem=$data['i'];
    $pointer = $data['pointer'];
    $kt = $data['kt'];
    if($seat!=""){
    $sql = "INSERT INTO form(id,roll,sem,seat_no,month_year,pointer,kt) VALUES ('$id','$roll','$sem', '$seat', '$month', '$pointer', '$kt')";
    $result = $conn->query($sql);
    if($result){
        echo "SUCCESS";
    }
}
?>