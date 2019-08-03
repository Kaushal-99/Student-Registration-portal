<?php include '../templates/header.php'; ?>
<?php include 'backend/onlyss.php'; ?>


<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Welcome, Student Section!</h3>
        <strong>SS</strong>
    </div>

    <ul class="list-unstyled components ">
        <li>
            <a href="#">
                Pending Approval
            </a>
        </li>
        <li>
            <a href="#">
               Approved
            </a>
        </li>
        <li>
            <a href="#">
                View All
            </a>
        </li>
    </ul>


</nav>

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

    <div class="container main-content">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Form</th>
                    <th scope="col">Documents</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">17IT1020</th>
                    <td>Makarand Madhavi</td>
                    <td>

                        <button class="btn btn-info">View Form</button>


                    </td>
                    <td>
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">DTE Allotment
                                letter</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                1</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                2</button>
                            <button type="button" class="list-group-item list-group-item-action">Hall Ticket</button>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <button class="btn btn-success">Appprove</button>
                        </div>
                        <div class="container" style="margin-top: 5%">
                            <button class="btn btn-danger">Send Back</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">17IT1020</th>
                    <td>Makarand Madhavi</td>
                    <td>

                        <button class="btn btn-info">View Form</button>


                    </td>
                    <td>
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">DTE Allotment
                                letter</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                1</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                2</button>
                            <button type="button" class="list-group-item list-group-item-action">Hall Ticket</button>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <button class="btn btn-success">Appprove</button>
                        </div>
                        <div class="container" style="margin-top: 5%">
                            <button class="btn btn-danger">Send Back</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">17IT1020</th>
                    <td>Makarand Madhavi</td>
                    <td>

                        <button class="btn btn-info">View Form</button>


                    </td>
                    <td>
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">DTE Allotment
                                letter</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                1</button>
                            <button type="button" class="list-group-item list-group-item-action">Marksheet sem
                                2</button>
                            <button type="button" class="list-group-item list-group-item-action">Hall Ticket</button>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <button class="btn btn-success">Appprove</button>
                        </div>
                        <div class="container" style="margin-top: 5%">
                            <button class="btn btn-danger">Send Back</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php include '../templates/footer.html'; ?>