<?php
include '../backend/conn.php';
include 'backend/getdata.php';

include_once('../PHPMailer-master/src/PHPMailer.php');
include_once('../PHPMailer-master/src/SMTP.php');
if(isset($_POST['form'])) {


$roll = $_POST['input1'];
$row=getdata($roll);

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
    $mail->addAttachment('../pdf/'.$roll.".pdf");     

    $mail->Send();
    $sql="UPDATE approval set final_status='approved' WHERE roll='$roll'";
    $result=$conn->query($sql);
// send email
//mail("chandekaushal@gmail.com","My subject",$msg);
    ?>
    <script type="text/javascript">
        alert("mail sent");
        window.location.href='final_approval.php';
    </script>
<?php
}
?>