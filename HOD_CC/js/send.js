function sendback(user,roll){
	
	x=user;
	y=roll;
	console.log(x);
	console.log(y);
	$.ajax({
        type: "POST",
        url: "backend/sending.php",
        data: {
            //data goes here
            x,y
        },
        success: function (data) {
            console.log(data);
            //data is returned here
            if (data == "sent") {
            	alert('message sent');
            } 
        }

        
    });

}