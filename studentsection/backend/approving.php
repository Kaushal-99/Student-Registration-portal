<?php
include '../../backend/conn.php';
    $roll = $_POST['rollnum'];
    $user=$_POST['user'];
    $sql = "SELECT * FROM login WHERE username='$user' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        	if ($row['type']=='SS') {
            	$sql = "UPDATE approval set stud_section='$user' where roll='$roll' ";
                $result = $conn->query($sql);
                echo 'SS';
            
        	}

    }
?>