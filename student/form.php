<?php include '../templates/header.php'; ?>
<?php include 'backend/onlystudent.php'; ?>
<?php include 'sidebar.php'; ?>
<script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
  
    <script src="js/index.js"></script>
<script type="text/javascript">
    function display(){
   var x=document.getElementById("scholarship") ;
   if(x.style.display=="none")
   {
    x.style.display="block";
   }
   else
   {
    x.style.display=="none"
   }
}

function hide(){
   var x=document.getElementById("scholarship") ;
   if(x.style.display=="block")
   {
    x.style.display="none";
   }
   else
   {
    x.style.display=="none"
   }

}
function submit() {
    sem1_seat= $('#sem1-seat').val();
    sem1_pointer = $('#sem1-pointer').val();
    sem1_kt = $('#sem1-kt').val();

    sem2_seat= $('#sem2-seat').val();
    sem2_pointer = $('#sem2-pointer').val();
    sem2_kt = $('#sem2-kt').val();

    sem3_seat= $('#sem3-seat').val();
    sem3_pointer = $('#sem3-pointer').val();
    sem3_kt = $('#sem3-kt').val();

    sem4_seat= $('#sem4-seat').val();
    sem4_pointer = $('#sem4-pointer').val();
    sem4_kt = $('#sem4-kt').val();

    sem5_seat= $('#sem5-seat').val();
    sem5_pointer = $('#sem5-pointer').val();
    sem5_kt = $('#sem5-kt').val();

    sem6_seat= $('#sem6-seat').val();
    sem6_pointer = $('#sem6-pointer').val();
    sem6_kt = $('#sem6-kt').val();

    console.log(sem1_seat);
    console.log(sem1_pointer);
    console.log(sem1_kt);

    console.log(sem2_seat);
    console.log(sem2_pointer);
    console.log(sem2_kt);
    
    console.log(sem3_seat);
    console.log(sem3_pointer);
    console.log(sem3_kt);

    console.log(sem4_seat);
    console.log(sem4_pointer);
    console.log(sem4_kt);

    console.log(sem5_seat);
    console.log(sem5_pointer);
    console.log(sem5_kt);

    console.log(sem6_seat);
    console.log(sem6_pointer);
    console.log(sem6_kt);








    }
</script>>
<style type="text/css">
#submitbutton{
    margin-top:10px;
    margin-left:35%;
}
.form-control
{
    height: 30px;
}
td{
    text-align: center;
    padding-bottom:10px; 
    padding-left:10px;
    padding-right: 10px;
    padding-top: 10px;
}
th{
    text-align: center;
}
#table{
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
    </div>
    <div class="container" >
    <div class="row">
    <div>
        <table class=" table-bordered table-hover table-responsive" >
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
            <td>NOV-18</td>
           
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem1-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem1-kt"></input></td>
        </tr>
        <tr>
            <td>II</td>
            <td><input type="text" name="seat" size="4" class="form-control" id="sem2-seat"></input></td>
            <td>MAY-19</td>
            
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem2-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem2-kt"></input></td>
        </tr>
        <tr>
            <td>III</td>
            <td><input type="text" name="seat" size="4" class="form-control" id="sem3-seat"></input></td>
            <td>NOV-19</input></td>
   
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem3-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem3-kt"></input></td>
        </tr>
        <tr>
            <td>IV</td>
            <td><input type="text" name="seat" size="4" class="form-control" id="sem4-seat"></input></td>
            <td>MAY-20</td>
       
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem4-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem4-kt"></input></td>
        </tr>
        <tr>
            <td>V</td>
            <td><input type="text" name="seat" size="4" class="form-control" id="sem5-seat"></input></td>
            <td>NOV-20</input></td>
            
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem5-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem5-kt"></input></td>
        </tr>
        <tr>
            <td>VI</td>
            <td><input type="text" name="seat" size="4" class="form-control" id="sem6-seat"></input></td>
            <td>MAY-21</td>
          
            <td><input type="text" name="pointer" size="4" class="form-control" id="sem6-pointer"></input></td>
            <td><input type="text" name="no" size="4" class="form-control" id="sem6-kt"></input></td>
        </tr>

        </table>
    </div>
    </div>
    </div>
    <br>
    
    <label style="margin-left: 200px;">Receipt type:</label>
    <select class="dropdown" >
        <option value="Provisional">
            Provisional
        </option>
        <option value="Regular">
            Regular
        </option>
    </select>
    <br>

    <label style="margin-left: 111px;">Applied for scholarship:</label>
    <button class="btn btn-danger" style="width:50px ;text-align:center;display:inline;" onclick="display()" data-toggle="collapse" data-target="#scholarship">Yes</button>

    <button class="btn btn-success " style="width:50px;display:inline;text-align: center;" onclick="hide()" data-toggle="collapse" data-target="#scholarship">No</button>
 <div id="scholarship" style="display: none;" class="collapse"> 
    <form >
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
  <button type="submit" onclick="submit()" class="btn btn-info btn-lg" id="submitbutton" >submit</button>
</div>



<?php include '../templates/footer.html'; ?>