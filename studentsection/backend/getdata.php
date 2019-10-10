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
             documents_submitted.name,documents_submitted.doc_url,approval.stud_section FROM `documents_submitted`,`student`,`approval`
             WHERE documents_submitted.roll=student.roll
             AND documents_submitted.roll=approval.roll
            ";
    $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['stud_section']==$user){       
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
            
            
            
            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then approval.stud_section else '' end as 'ssapp',

           
            
            documents_submitted.name,documents_submitted.doc_url,approval.stud_section FROM documents_submitted,student,approval WHERE
            documents_submitted.roll=student.roll
            AND documents_submitted.roll=approval.roll
        
           
            ";
        $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['stud_section']=="" ){       
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
function getfinalstatus(){
    include '../backend/conn.php';
    $data1=array();
    $sql = "SELECT 
            case when ROW_NUMBER() over (PARTITION BY documents_submitted.roll order by documents_submitted.name)=1 
            then documents_submitted.roll else '' end as 'roll_num',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.department else '' end as 'stud_dept',

            case when ROW_NUMBER() over (PARTITION BY student.name order by documents_submitted.name)=1 
            then student.name else '' end as 'student_name',
            
            
            
            documents_submitted.name,documents_submitted.doc_url ,approval.hod,approval.CC,approval.stud_section,approval.final_status FROM `documents_submitted`,`student`,`approval` WHERE
            documents_submitted.roll=student.roll
            AND documents_submitted.roll=approval.roll
            ";
        $result = $conn->query($sql);  
    while ($row = $result -> fetch_assoc()){  
        if($row['hod']!='' && $row['CC']!='' && $row['stud_section']!='' && $row['final_status']==''){       
            array_push($data1, $row);
        }
       

   

}
 return $data1;
}

?>