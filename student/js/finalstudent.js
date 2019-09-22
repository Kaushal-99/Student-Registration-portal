function finalalert(roll){
	var roll_num=roll;
	console.log(roll);
	

	$.ajax({

		type:"POST",
		url:"backend/create_row_of_approval.php",
		data:{

			roll_num
		},
	success:function(data){
				if(data=='done'){


					alert("Form submitted successfully");
					
				}

			}
	})
}