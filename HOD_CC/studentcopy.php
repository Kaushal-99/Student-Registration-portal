<?php
require('../fpdf16/fpdf.php');
include '../backend/conn.php';
include 'backend/getdata.php';

include_once('../PHPMailer-master/src/PHPMailer.php');
include_once('../PHPMailer-master/src/SMTP.php');
if(isset($_POST['form'])) {


$roll = $_POST['input1'];
$row=getdata($roll);
$result=getscholarshipdata($roll);
$pdf = new FPDF();
$pdf->AddPage();
$file=$row['photo'];
$pdf->Image('../images/'.$file,150,7,40);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Roll no :');
$pdf->Cell(50,10,$row['roll'],0,1);
$pdf->Cell(40,10,'Name:');
$pdf->Cell(50,10,$row['name'],0,1);
$pdf->Cell(40,10,'Department:');
$pdf->Cell(50,10,$row['department'],0,1);
$pdf->Cell(40,10,'Year:');
$pdf->Cell(50,10,$row['year']);

$pdf->Cell(40,10,'Sem:');
$pdf->Cell(50,10,$row['sem'],0,1);

$pdf->Cell(40,10,'Caste:');
$pdf->Cell(50,10,$row['caste'],0,1);

$pdf->Cell(40,10,'Admission type:');
$pdf->Cell(50,10,$row['admission_type'],0,1);

//$pdf->Cell(40,10,$row['roll']);
//$pdf->Cell(50,10,'Powered by FPDF.',0,1);//for going to next line
//$pdf->Cell(60,10,'Hello');
$pdf->Cell(40,10,'Receipt type:');
$pdf->Cell(50,10,$result['receipt_type'],0,1);

$pdf->Cell(40,10,'Applied for ',0,1);

$pdf->Cell(40,10,'scholarship:');
$pdf->Cell(50,10,$result['applysch'],0,1);

if($result['applysch']=="Yes"){

$pdf->Cell(40,10,'Mahadbt ',0,1);
$pdf->Cell(40,10,'Scholarship ',0,1);
$pdf->Cell(40,10,'Application Id :');
$pdf->Cell(50,10,$result['appid'],0,1);

$pdf->Cell(40,10,'Scholarship',0,1);
$pdf->Cell(40,10,'Application status:');
$pdf->Cell(50,10,$result['appstatus'],0,1);
}

$filepath="../uploadedfiles/test.pdf";
$pdf->Output($filepath,'F');

$msg="Your copy";
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    //authentication SMTP enabled
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    //indico el puerto que usa Gmail 465 or 587
    $mail->Port = 465; 
    $mail->Username = "assignmentsub2403@gmail.com";
    $mail->Password = "assign_pass@1234";
    $mail->SetFrom("assignmentsub2403@gmail.com","RAIT");
    $mail->AddReplyTo("assignmentsub2403@gmail.com","Name Replay");
    $mail->Subject = " Student copy";
    $mail->MsgHTML($msg);
    $mail->AddAddress($row['email']);
    $mail->addAttachment('../uploadedfiles/test.pdf');     

    $mail->Send();
// send email
//mail("chandekaushal@gmail.com","My subject",$msg);
    ?>
    <script type="text/javascript">
        alert("mail sent");
        window.location.href='index.php';
    </script>
<?php
}
?>