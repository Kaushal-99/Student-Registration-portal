<?php include '../templates/header.php'; ?>
<?php include 'backend/onlyss.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    
</head>

<script src="../assets/jquery.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<body>
    

<div id="content" class="container">
    <div class="container">
        <div class="row header">

            <div class="logodiv">
                <img id="logo" src="../images/dylogo.png" alt="logo">
            </div>
            <div class="text-center titlediv">
                <h1 id="title">Student Registration Portal</h1>
            </div>
        </div>
    </div>


<?php
    include '../backend/conn.php';
    include 'backend/getdata.php';
    if(isset($_POST['form_view'])) {
        $roll = $_POST['input2'];
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


  <?php  } ?>
</div>

<a href="studentcopy.php">LINK</a>
</body>
  <?php include '../templates/footer.html'; ?>