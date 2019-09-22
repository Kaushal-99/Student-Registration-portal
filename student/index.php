<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'backend/getdata.php';?>

<!-- Page Content  -->
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
                        <a class="nav-link" href="../backend/logout.php"><button class="btn-sm btn btn-outline-primary">Logout</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <?php
    $approved=getstudentapproval($_SESSION['username']);
    $ac=getacademicdata($_SESSION['username']);
    ?>
    <div class="container main-content">
        <h3>Application Status : Pending submission from student</h3>
        <div class="progress">
            <?php if ($ac) { ?>
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Fill form
                </div>

            <?php } 
            else {?>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Fill form
                </div>

            <?php } ?>

          
            <?php if ($approved['stud_section']!='') { ?>
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by student section
                </div>

            <?php } 
            else {?>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by student section
                </div>

            <?php } ?>
            
            <?php if ($approved['CC']!='') { ?>
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by CC
                </div>

            <?php } 
            else {?>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by CC
                </div>

            <?php } ?>

            <?php if ($approved['hod']!='') { ?>
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by HOD
                </div>

            <?php } 
            else {?>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" id="upload documents">
                Approval by HOD
                </div>

            <?php } ?>
            
        </div>
        <br>
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

    </div>
</div>

<?php include '../templates/footer.html'; ?>