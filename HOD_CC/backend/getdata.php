<?php
function getdata($roll){
    include '../backend/conn.php';
    $sql = "SELECT * FROM student WHERE roll='$roll'";
    $result = $conn->query($sql);
    if($result){     
           $row = $result -> fetch_assoc();
    }
return $row;
}

function getdataforapproval($roll){
    include '../../backend/conn.php';
    $sql = "SELECT * FROM student WHERE roll='$roll'";
    $result = $conn->query($sql);
    if($result){     
           $row = $result -> fetch_assoc();
    }
return $row;
}
function getacademicdata($roll){

	include '../backend/conn.php';

	$sql = "SELECT * FROM form WHERE roll='$roll'";
    $result = $conn->query($sql);
    $data1=array();
    while ($row = $result -> fetch_assoc()) {
    	array_push($data1, $row);
	}
	return $data1;
}

function getscholarshipdata($roll){
	include '../backend/conn.php';
	$sql = "SELECT * FROM admission_type WHERE roll='$roll' ";
   	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}
function getscholarshipdataforapproval($roll){
    include '../../backend/conn.php';
    $sql = "SELECT * FROM admission_type WHERE roll='$roll' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}


function getstudent(){
    include '../backend/conn.php';
    $data1=array();
    $sql = "SELECT 
			case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
			then documents_submitted.roll else '' end as 'roll_num',

			case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
			then student.name else '' end as 'student_name',

			documents_submitted.name,documents_submitted.doc_url FROM `documents_submitted`
			join student ON
			documents_submitted.roll=student.roll";
            $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){         
        array_push($data1, $row);
    }
    return $data1;
}  

function getapproved($user){
    include '../backend/conn.php';
    $data1=array();
    $sql = "SELECT 
            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then documents_submitted.roll else '' end as 'roll_num',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.name else '' end as 'student_name',
            
            

            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then hod.department else '' end as 'hod_dept',

            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then cc.department else '' end as 'cc_dept',

            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then cc.division else '' end as 'cc_div',
            
            documents_submitted.name,documents_submitted.doc_url,approval.hod,approval.CC,approval.stud_section FROM `documents_submitted`,`student`,`approval`,`hod`,`cc` WHERE
            documents_submitted.roll=student.roll
            AND documents_submitted.roll=approval.roll
            AND hod.department=student.department
            AND cc.department=student.department
            AND student.division=cc.division
            ";
        $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['hod']==$user && $row['name']!=""){       
            array_push($data1, $row);
        }
        else if($row['CC']==$user &&  $row['name']!=""){       
            array_push($data1, $row);
        }

   

    }
 return $data1;
}


function getunapproved($user){
    include '../backend/conn.php';
    $data1=array();
    $sql = "SELECT 
            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then documents_submitted.roll else '' end as 'roll_num',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.name else '' end as 'student_name',
        
            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then approval.hod else '' end as 'hodapp',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then approval.cc else '' end as 'ccapp',

            

            documents_submitted.name,documents_submitted.doc_url ,approval.hod,approval.CC,approval.stud_section,hod.department as hod_dept,cc.department as cc_dept,student.department as stud_dept,hod.username as hodname,cc.name as ccname FROM `documents_submitted`,`student`,`approval`,`hod`,`cc` WHERE
            documents_submitted.roll=student.roll
            AND documents_submitted.roll=approval.roll
            AND student.department=hod.department
            AND student.department=cc.department
            AND student.division=cc.division
            ";
        $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['hod_dept']==$row['stud_dept'] && $user==$row['hodname'] && $row['stud_section']!="" && $row['hod']=='' && $row['CC']!='' ){       
            array_push($data1, $row);
        }
        else if($row['cc_dept']==$row['stud_dept'] && $user==$row['ccname'] && $row['CC']=='' && $row['stud_section']!=""){       
            array_push($data1, $row);
        }

   

    }
     return $data1;
}

function getstatus(){
    include '../backend/conn.php';
    $data1=array();
    $sql = "SELECT 
            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then documents_submitted.roll else '' end as 'roll_num',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.department else '' end as 'stud_dept',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.name else '' end as 'student_name',
            
            
            
            documents_submitted.name,documents_submitted.doc_url ,approval.hod,approval.CC,approval.stud_section FROM `documents_submitted`,`student`,`approval` WHERE
            documents_submitted.roll=student.roll
            AND documents_submitted.roll=approval.roll
            ";
        $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['hod']!='' ){       
            array_push($data1, $row);
        }
        else if( $row['CC']!=''){       
            array_push($data1, $row);
        }
        else if( $row['stud_section']!=''){       
            array_push($data1, $row);
        }

   

}
 return $data1;
}

?>