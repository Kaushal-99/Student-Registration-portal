<?php

function getdocuments($roll){
    include '../backend/conn.php';
    
   
    $sql = "SELECT * FROM documents_submitted WHERE roll='$roll'";
    $result = $conn->query($sql);
    $data1=array();
    while ($row = $result -> fetch_assoc()) { 
        array_push($data1, $row);
    }
	return $data1;
}

?>