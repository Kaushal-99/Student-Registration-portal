<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; ?>


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
                        <a class="nav-link" href="../backend/logout.php"><button
                                class="btn-sm btn btn-outline-primary">Logout</button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        <h3>Application Form</h3>
        <div class="card">
            <h5 class="card-header">Name : <span style="font-weight:100"> Makjets Singhania</span></h5>
            <div class="card-body">
                <div class="row">


                    <div class="col-sm-2">
                        <img src="http://via.placeholder.com/150x200" alt="" srcset="">
                    </div>

                    <div class="col-sm-10">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Roll Number : 17IT1020</li>
                            <li class="list-group-item">Branch : Computer Science</li>
                            <li class="list-group-item">Year : TE july 2019</li>
                            <li class="list-group-item">Caste : Open</li>
                            <li class="list-group-item">Type of admission : </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<?php include '../templates/footer.html'; ?>