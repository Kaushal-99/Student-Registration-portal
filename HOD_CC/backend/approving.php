<?php
include '../../backend/conn.php';

require('../../fpdf16/fpdf.php');

include 'getdata.php';


    $roll = $_POST['rollnum'];
    $user=$_POST['user'];
    $sql = "SELECT * FROM login WHERE username='$user' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        if($row['type']=='HOD'){

             $sql = "UPDATE approval set hod='$user' WHERE roll='$roll' ";
                $result = $conn->query($sql);
                
                $row=getdataforapproval($roll);
                $result=getscholarshipdataforapproval($roll);
                $pdf = new FPDF();
                $pdf->AddPage();

                $pdf->SetFont('Arial','B',18);
                $pdf->Cell(0,30,'Student Copy',0,1,'C');
                $file=$row['photo'];
                $pdf->Image('../../images/'.$file,150,35,40);


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

                $filepath="../../pdf/".$roll.".pdf";
                $pdf->Output($filepath,'F');
                
               

                echo 'HOD';
             
             }
        elseif($row['type']=='CC'){
                $sql = "UPDATE approval set cc='$user' WHERE roll='$roll' ";
                $result = $conn->query($sql);
                echo 'CC';
            }
      

    }
?>