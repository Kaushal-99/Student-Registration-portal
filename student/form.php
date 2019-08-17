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
</script>>
<style type="text/css">
    #submitbutton {
        margin-top: 10px;
        margin-left: 35%;
    }

    .form-control {
        height: 30px;
    }

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
                        <img src="<?=$student['photo']?>" onerror="this.src='http://via.placeholder.com/150x200'" srcset="">
                    </div>

                    <div class="col-sm-10">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Roll Number : <?=$student['roll']?></li>
                            <li class="list-group-item">Branch : <?=$student['department']?></li>
                            <li class="list-group-item">Year : <?=$student['year']?> &nbsp&nbsp&nbsp&nbsp; Sem : <?=$student['sem']?></li>
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
                    <tr>
                        <td>I</td>
                        <td><input type="text" name="seat" size="3" class="form-control" id="sem1-seat"></input></td>
                        <td><input type="month" onclick="disp()" size="3" class="form-control" id="mon"></td>

                        <td><input type="number" min="0" max="10" name="pointer" size="4" class="form-control" id="sem1-pointer"></input>
                        </td>
                        <td><input type="number" min="0" max="6" name="no" size="4" class="form-control" id="sem1-kt"></input></td>
                    </tr>
                    <tr>
                        <td>II</td>
                        <td><input type="text" name="seat" size="4" class="form-control" id="sem2-seat"></input></td>
                        <td><input type="month" size="3" class="form-control" id=""></td>

                        <td><input type="text" name="pointer" size="4" class="form-control" id="sem2-pointer"></input>
                        </td>
                        <td><input type="text" name="no" size="4" class="form-control" id="sem2-kt"></input></td>
                    </tr>
                    <tr>
                        <td>III</td>
                        <td><input type="text" name="seat" size="4" class="form-control" id="sem3-seat"></input></td>
                        <td><input type="month" size="3" class="form-control" id=""></td>

                        <td><input type="text" name="pointer" size="4" class="form-control" id="sem3-pointer"></input>
                        </td>
                        <td><input type="text" name="no" size="4" class="form-control" id="sem3-kt"></input></td>
                    </tr>
                    <tr>
                        <td>IV</td>
                        <td><input type="text" name="seat" size="4" class="form-control" id="sem4-seat"></input></td>
                        <td><input type="month" size="3" class="form-control" id=""></td>

                        <td><input type="text" name="pointer" size="4" class="form-control" id="sem4-pointer"></input>
                        </td>
                        <td><input type="text" name="no" size="4" class="form-control" id="sem4-kt"></input></td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td><input type="text" name="seat" size="4" class="form-control" id="sem5-seat"></input></td>
                        <td><input type="month" size="3" class="form-control" id=""></td>

                        <td><input type="text" name="pointer" size="4" class="form-control" id="sem5-pointer"></input>
                        </td>
                        <td><input type="text" name="no" size="4" class="form-control" id="sem5-kt"></input></td>
                    </tr>
                    <tr>
                        <td>VI</td>
                        <td><input type="text" name="seat" size="4" class="form-control" id="sem6-seat"></input></td>
                        <td><input type="month" size="3" class="form-control" id=""></td>

                        <td><input type="text" name="pointer" size="4" class="form-control" id="sem6-pointer"></input>
                        </td>
                        <td><input type="text" name="no" size="4" class="form-control" id="sem6-kt"></input></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <br>

    <label style="margin-left: 200px;">Receipt type:</label>
    <select class="dropdown">
        <option value="Provisional">
            Provisional
        </option>
        <option value="Regular">
            Regular
        </option>
    </select>
    <br>

    <label style="margin-left: 111px;">Applied for scholarship:</label>
    <button class="btn btn-danger" style="width:50px ;text-align:center;display:inline;" onclick="Yes()"
        data-toggle="collapse" data-target="#scholarship">Yes</button>
        <input type="text" id="applysch" value="No" class="hide">
    <button class="btn btn-success " style="width:50px;display:inline;text-align: center;" onclick="No()"
        data-toggle="collapse" data-target="#scholarship">No</button>
    <div id="scholarship" style="display: none;" class="collapse">
        <form>
            <br>
            <label style="display:inline">
                Mahadbt Scholarship Application ID:
            </label>
            <input type="text" name="SID" style="display:inline;">
            <br><br>
            <label style="margin-left:52px;" style="display:inline">
                Scholarship Application status:
            </label>
            <select class="dropdown" style="display:inline">
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





        </form>

    </div>

    <br>
    <button type="submit" onclick="submit()" class="btn btn-info btn-lg" id="submitbutton">submit</button>
</div>



<?php include '../templates/footer.html'; ?>