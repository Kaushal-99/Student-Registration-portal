<?php
include '../../backend/conn.php';
$roll=$_POST['roll_num'];
$sql="INSERT INTO approval VALUES('$roll','','','','')";
$result=$conn->query($sql);
echo 'done';
?>