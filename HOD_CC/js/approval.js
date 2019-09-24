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
                console.log(data);
                if (data == "HOD" || data == "CC") {
                    alert("Approved by hod!! ");
                } 
                if (data == "CC") {
                    alert("Approved by CC!!");
                } 
                
            }
        });
    
}

