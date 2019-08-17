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

