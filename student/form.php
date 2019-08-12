<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; ?>
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


        <br>
        <div class="container">
            <h5>Results info :</h5>
            <div class="row">

                <div>
                    <table class="table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Sem</th>
                                <th scope="col">Seat no</th>
                                <th scope="col">Month/Year</th>
                                <th scope="col">Pointer</th>
                                <th scope="col">No. of KT</th>
                            </tr>
                        </thead>

                        <body>
                            <tr>
                                <td>I</td>
                                <td><input type="text" name="seat" size="3" class="form-control"></td>
                                <td>NOV-18</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td><input type="text" name="seat" size="4" class="form-control"></td>
                                <td>MAY-19</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>III</td>
                                <td><input type="text" name="seat" size="4" class="form-control"></td>
                                <td>NOV-19</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>IV</td>
                                <td><input type="text" name="seat" size="4" class="form-control"></td>
                                <td>MAY-20</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td><input type="text" name="seat" size="4" class="form-control"></td>
                                <td>NOV-20</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>VI</td>
                                <td><input type="text" name="seat" size="4" class="form-control"></td>
                                <td>MAY-21</td>
                                <td><input type="text" name="pointer" size="4" class="form-control"></td>
                                <td><input type="text" name="no" size="4" class="form-control"></td>
                            </tr>
                        </body>

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

            <input type="text" hidden id="applysch" value="No">

        <button class="btn btn-success " style="width:50px;display:inline;text-align: center;" onclick="No()"
            data-toggle="collapse" data-target="#scholarship">No</button>
        <div id="scholarship" style="display: none;" class="collapse ">
            <form class="form-group">
                <br>
                <label style="display:inline">
                    Mahadbt Scholarship Application ID:
                </label>
                <input type="text" name="SID" class="form-control" style="display:inline; max-width:20%;">
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
        <button type="submit" class="btn btn-info btn-lg" id="submitbutton">submit</button>
    </div>
</div>
<?php include '../templates/footer.html'; ?>