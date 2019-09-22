function form_view(button_id) {
    roll = button_id;
   
    console.log(roll);
    //console.log(password);

        $.ajax({
            type: "POST",
            url: "backend/viewform.php",
            data: {
                //data goes here
                roll,
            },
            success: function (data) {
                //data is returned here
                if(data=="got it"){
                    window.location = 'HOD_CC/viewform.php';
                }
                if(data=="no"){
                    alert('not done');
                }
               
            }
        });
    
}
