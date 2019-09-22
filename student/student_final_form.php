<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; 
 include '../studentsection/backend/getdata.php'; 
//error_reporting(0);
?>
<script src="../assets/jquery.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<script src="js/finalstudent.js"></script>

<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="navbar-toggler-icon"></i>
                <span>Toggle Sidebar</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Student Registration Portal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../backend/logout.php"><button
                                class="btn-sm btn btn-outline-primary">Logout</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


<?php
    
    
        $roll = $_SESSION['username'];
        $row=getdata($roll);
  
    
?>

<div class="container main-content">
        <h3>Application Form</h3>
        <div class="card">
        
            <h5 class="card-header">Name : <span style="font-weight:100"> <?=$row['name']?></span></h5>
            <div class="card-body">
                <div class="row">


                    <div class="col-sm-2">
                        <img src="<?='../images/'.$row['photo']?>" onerror="this.src='http://via.placeholder.com/150x200'"
                            srcset="" width="150" height="200">
                    </div>

                    <div class="col-sm-10">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Roll Number : <?=$row['roll']?></li>
                            <li class="list-group-item">Branch : <?=$row['department']?></li>
                            <li class="list-group-item">Year : <?=$row['year']?> &nbsp&nbsp&nbsp&nbsp; Sem :
                                <?=$row['sem']?></li>
                            <li class="list-group-item">Caste : <?=$row['caste']?></li>
                            <li class="list-group-item">Type of admission : <?=$row['admission_type']?></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
</div>
<br>

 	

    <br>
    <br>
   
<div class="container">

 <h3>Academic details</h3>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sem</th>
                        <th scope="col">Seat no</th>
                        <th scope="col">Month/Year</th>
                        <th scope="col">Pointer</th>
                        <th scope="col">No. of KT</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                    <?php 

                    $rows=getacademicdata($roll);
                    foreach ($rows as $row){
                    ?>
                    
                        <th scope="row"><?=$row['sem']?></th>
                        <td><?=$row['seat_no']?></td>
                        <td><?=$row['month_year']?></td>
                        <td><?=$row['pointer']?></td>
                        <td><?=$row['kt']?></td>
                    </tr>
                    <?php 
                    }?>

                </tbody>
            </table>


            <?php 
             $row=getscholarshipdata($roll);

			?>
            <br>
            <br>
            <H3>Scholarship</H3>
            <br>
            Receipt type :<?=$row['receipt_type']?>
            <br>
            Applied for scholarship :<?=$row['applysch']?>
            <br>
            <?php
            if($row['applysch']=="Yes"){
             ?>
            	Mahadbt Scholarship Application Id:<?=$row['appid']?>
            	<br>
            	Scholarship Application status: :<?=$row['appstatus']?>
            	<br>



            <?php   
            } 
            ?>
        </div>
        <br>

        <button type="submit" name="1" size="4" id="<?=$roll?>" class="btn btn-info btn-lg" style="margin-left: 40%" onclick="finalalert(this.id)">Submit</button>

</div>