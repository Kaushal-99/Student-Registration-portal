<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; 
 include 'backend/getdocuments.php';

//error_reporting(0);
?>
<script src="../assets/jquery.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<script src="js/upload.js"></script>
<style type="text/css">
	td{
    text-align: center;
    padding-bottom:10px; 
    padding-left:10px;
    padding-right: 10px;
    padding-top: 10px;
    }

</style>
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
     <br>
     <h4>Instructions to students</h4>

        <ul>
            <li>Phasellus iaculis t portt porttitor sem laoreettitor sem laoreetulis neque</li>
            <li>Purus sodat porttitor sem laoreetus iaculis neque</li>
            <li>Vestibulum laor t porttitor sem laoreeteet porttitor sem laoreet porttitor sem</li>
            <li>Ac tristique lib Phasellus ero volutpat at</li>
            <li>Purus sodat porttitor sem laoreetus iaculis neque</li>
            <li>Vestibulum laor t porttitor sem laoreeteet porttitor sem laoreet porttitor sem</li>
            <li>Ac tristique lib Phasellus ero volutpat at</li>
        </ul>
        <br>
        
            
<form method="post" enctype="multipart/form-data" action="backend/uploadfile.php">
    <div class="table-responsive table-hover table-striped">
        <table class="table" width="300">
            <thead align="center">
                <tr>
                    <th>Document no</th>
                    <th> Select Document</th>
                    <th>Choose file</th>
                    <th>Upload file</th>
                </tr>
            </thead>
        
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <select class="dropdown" style="display:inline"  name="doc1" id="doc1">
                            <option value="Marksheet-Sem 1" id="Marksheet-Sem 1" >
                            Marksheet-Sem 1
                            </option>
                            <option value="Marksheet-Sem 2">
                            Marksheet-Sem 2
                            </option>
                            <option value="Marksheet-Sem 3">
                            Marksheet-Sem 3
                            </option>
                            <option value="Marksheet-Sem 4">
                            Marksheet-Sem 4
                            </option>
                            <option value="Marksheet-Sem 5">
                            Marksheet-Sem 5
                            </option>
                            <option value="Marksheet-Sem 6">
                            Marksheet-Sem 6
                            </option>
                            <option value="Marksheet-Sem 7">
                            Marksheet-Sem 7
                            </option>
                            <option value="Hall Ticket">
                            Hall Ticket
                            </option>
                            <option value="Caste Validity Certificate">
                            Caste Validity Certificate
                            </option>
                            <option value="DTE Allotment Letter">
                            DTE Allotment Letter
                            </option>
        
                        </select>
            
                    </td> 
                    <td><input type="file" name="file1" ></td>
           
            
           
                    <td><input type="submit" name="1" size="4" class="btn btn-success" ></input></td>
                    
                </tr>

            </tbody>
       </table>
    </div>
</form>

        <br>
        <br>
        <H3 align="center">UPLOADED DOCUMENTS</H3>
        <br>
        

       <?php  $row=getdocuments($_SESSION['username']); 
        
            
        ?>
        <table class="table table-hover table-striped" align="center">
                <thead align="center">
                    <tr>
                        <th scope="col">roll</th>
                        <th scope="col">document</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($row as $data) { 
                ?>
                    <tr>
                        <td><?=$data['roll']?></td>
                        <td><?=$data['name']?></td>
                    </tr>
                    
                <?php }
                ?>
                </tbody>
        </table>

        <br>
        <br>

        <button type="submit" name="1" size="4" class="btn btn-info btn-lg"  style="margin-left: 40%"><a href="student_final_form.php">Next</a></button>

</div>
    
 
    
    


    

<?php include '../templates/footer.html'; ?>
