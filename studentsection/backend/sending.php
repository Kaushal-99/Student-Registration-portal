<?php
include '../../backend/conn.php';
// the message
$user=$_POST['x'];
$roll=$_POST['y'];
$msg = "Your application has been rejected by ".$user;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email


$sql = "SELECT * FROM student WHERE roll='$roll' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();


    if($row){
    	$mail_id=$row['email'];
    	mail($mail_id,"APPLICATION REJECTED",$msg);
    	echo "sent";
    }
    $sql="SELECT doc_url FROM documents_submitted where documents_submitted.roll='$roll' ";
    $result=$conn->query($sql);
    $data1=array();
    while ($row = $result -> fetch_assoc()){         
        $x='../'.$row['doc_url'];
        unlink($x);
        }

	$sql="DELETE documents_submitted,form,approval FROM documents_submitted INNER JOIN form INNER JOIN approval WHERE documents_submitted.roll=form.roll AND documents_submitted.roll=approval.roll AND documents_submitted.roll='$roll' ";
	$result = $conn->query($sql);


?>