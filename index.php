<?php 
session_start();
if(isset($_SESSION['logintype'])){
    print($_SESSION['logintype']);
    if($_SESSION['logintype'] == 'STUDENT'){
        header('Location: student/');
    }
    elseif ($_SESSION['logintype'] == 'SS') {
        header('Location: studentsection/');
    }
    elseif ($_SESSION['logintype'] == 'HOD' || $_SESSION['logintype'] == 'CC') {
        header('Location: HOD_CC/');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body>
    
    <nav class="navbar navbar-dark bg-dark">

        <h4 class="rait-text text-center">Ramrao Adik Institute of Technology</h4>


    </nav>
    <div class="container ">
        <div class="row header">

            <div class="logodiv">
                <img id="logo" src="images/dylogo.png" alt="logo">
            </div>
            <div class="text-center titlediv">
                <h1 id="title">Student Registration Portal</h1>
            </div>
        </div>
    </div>


    <div style="max-width: 500px;" class="add-box container">
        <div>
            <h1 class="text-center">Login</h1>
        </div>
        <div class="container">
             <form> 
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" required>
            </div>


            <button style="margin-left:40%;" type="submit" onclick="login()" class="btn btn-success">login</button>
            </form>  
        </div>

    </div>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>