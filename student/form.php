<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'backend/getdata.php'; ?>
<script src="assets/jquery.js"></script>
<script src="assets/bootstrap.min.js"></script>

<script src="js/index.js"></script>
<script type="text/javascript">
    function display() {
        var x = document.getElementById("scholarship");
        if (x.style.display == "none") {
            x.style.display = "block";
        } else {
            x.style.display == "none"
        }
    }

    function hide() {
        var x = document.getElementById("scholarship");
        if (x.style.display == "block") {
            x.style.display = "none";
        } else {
            x.style.display == "none"
        }

    }
</script>
<style type="text/css">
    #submitbutton {
        margin-top: 10px;
        margin-left: 35%;
    }

    /* .form-control {
        height: 30px;
    } */

    td {
        text-align: center;
        padding-bottom: 10px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
    }

    th {
        text-align: center;
    }

    #table {
        margin-left: 30%;
    }
</style>

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
            <?php
        $student = getstudentdata($_SESSION['username']);
        //print_r($student);
        ?>
            <h5 class="card-header">Name : <span style="font-weight:100"> <?=$student['name']?></span></h5>
            <div class="card-body">
                <div class="row">


                    <div class="col-sm-2">
                        <img src="<?=$student['photo']?>" onerror="this.src='http://via.placeholder.com/150x200'"
                            srcset="">
                    </div>

                    <div class="col-sm-10">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Roll Number : <?=$student['roll']?></li>
                            <li class="list-group-item">Branch : <?=$student['department']?></li>
                            <li class="list-group-item">Year : <?=$student['year']?> &nbsp&nbsp&nbsp&nbsp; Sem :
                                <?=$student['sem']?></li>
                            <li class="list-group-item">Caste : <?=$student['caste']?></li>
                            <li class="list-group-item">Type of admission : <?=$student['admission_type']?></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div>
                <table class=" table-bordered table-hover table-responsive">
                    <tr>
                        <th>Sem</th>
                        <th>Seat no</th>
                        <th>Month/Year</th>
                        <th>Pointer</th>
                        <th>No. of KT</th>
                    </tr>
                    <?php for ($i=1; $i<=$student['sem']; $i=$i+1) { ?>

                    <tr>
                        <td><?=$i?></td>
                        <td><input type="text" name="seat" size="3" class="form-control" id="sem-<?=$i?>-seat"></td>
                        <td><input type="month" onclick="disp()" size="3" class="form-control" id="sem-<?=$i?>-mon">
                        </td>

                        <td><input type="number" min="0" max="10" name="pointer" size="4" class="form-control"
                                id="sem-<?=$i?>-pointer">
                        </td>
                        <td><input type="number" min="0" max="6" name="no" size="4" class="form-control"
                                id="sem-<?=$i?>-kt"></td>
                    </tr>
                    <?php }?>

                </table>
            </div>
        </div>
    </div>
    <br>



    <div class="container">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Receipt type:</label>
            <div class="col-sm-10">
                <select class="form-control" id="recpt">
                    <option value="Provisional">
                        Provisional
                    </option>
                    <option value="Regular">
                        Regular
                    </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Applied for scholarship:</label>
            <div class="col-sm-10">
                <select onchange="togglescholarship()" class="form-control" id="apply">
                    <option value="Yes">
                        Yes
                    </option>
                    <option selected value="No">
                        No
                    </option>
                </select>
            </div>
        </div>
        <div class="scholarship hide">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Mahadbt Scholarship Application Id:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="appid">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">
                    Scholarship Application status:
                </label>
                <div class="col-sm-5">
                    <select class="form-control" id="appstatus">
                        <option value="Aproved">
                            Approved
                        </option>
                        <option value="Not approved">
                            Not approved
                        </option>
                        <option value="Rejected">
                            Rejected
                        </option>

                    </select>
                </div>
            </div>
        </div>

    </div>

    <button type="submit" onclick="saveform(<?=$student['sem']?>)" class="btn btn-info btn-lg"
        id="submitbutton">submit</button>

</div>
</div>



<?php include '../templates/footer.html'; ?>