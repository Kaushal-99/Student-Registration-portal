function login() {
    username = $('#username').val();
    password = $('#password').val();
    //console.log(username);
    //console.log(password);
    if (username != '' && password != '') {

        $.ajax({
            type: "POST",
            url: "backend/login_ajax.php",
            data: {
                //data goes here
                username,
                password
            },
            success: function (data) {
                //data is returned here
                if (data == "STUDENT") {
                    window.location = 'student/';
                } else if (data == "HOD" || data == "CC") {
                    window.location = 'HOD_CC';
                } else if (data == "SS") {
                    window.location = 'studentsection/';
                } else {
                    alert("Incorrect username password!");
                }
            }
        });
    }
}

function Yes() {
    
    var x = document.getElementById("scholarship");
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display == "none"
    }
    $('#applysch').val("Yes");
}

function No() {
    
    var x = document.getElementById("scholarship");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display == "none";
    }
    $('#applysch').val("No");
}

function disp() {
    console.log($("#mon").val());
}