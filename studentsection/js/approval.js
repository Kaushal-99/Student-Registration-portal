function approving(roll,name) {
    rollnum =roll;
    user=name;
    console.log(rollnum);
    console.log(user);

        $.ajax({
            type: "POST",
            url: "backend/approving.php",
            data: {
                //data goes here
                rollnum,
                user
            },
            success: function (data) {
                
                
                if (data == "SS") {
                    alert("ss!");
                } 
                
            }
        });
    
}

