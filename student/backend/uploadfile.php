<?php
 	
    include '../../backend/conn.php';
    session_start();
    $data = $_POST;
    $roll = $_SESSION['username']; 
    //C:\xampp\htdocs\student-registration-portal\student

    $doc1=$data["doc1"];
    
	$filename=$_FILES['file1']['name'];
	$tempname=$_FILES['file1']['tmp_name'];
	$folder1="C:/xampp/htdocs/student-registration-portal/uploadedfiles/".$roll."+".$filename;
	$doc_url="../uploadedfiles/".$roll."+".$filename;
    //$file1=$data["file1"];
	move_uploaded_file($tempname, $folder1);
    $sql1 = "SELECT name,roll from documents_submitted WHERE name='$doc1' and roll='$roll' ";
    $result1 = $conn->query($sql1);
    if($result1){     
           $row = $result1 -> fetch_assoc();
    }

    if($row){
    	?>
    <script>
	if (confirm( "duplicate")){
    window.location.href = '../upload.php';
}
	</script>
	<?php
    }
    else{
    	
    $sql = "INSERT INTO documents_submitted VALUES ('$roll','$doc1','$doc_url')";

    $result = $conn->query($sql);
    if($result){
    	?>
    <script>
    if (confirm( "done")){
    window.location.href = '../upload.php';
}
    </script>
    <?php
    }    

   }


?>