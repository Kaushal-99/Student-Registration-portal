<?php

function getstudentdata($roll){
    include '../backend/conn.php';
    //$data = array();
    $sql = "SELECT * FROM student WHERE roll='$roll'";
    $result = $conn->query($sql);
    if($result){     
           $row = $result -> fetch_assoc();
    }
return $row;
}

?>