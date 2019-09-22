function togglescholarship() {
    if($('#apply').val()=="Yes"){
        $('.scholarship').show();
    }
    else{
        $('.scholarship').hide();
    }
}

function saveform(sem) {
    //console.log(sem);
    recpt = $("#recpt").val();
    apply = $("#apply").val();
    appid = $("#appid").val();
    appstatus = $("#appstatus").val();
   
    
    //console.log(apply);
    //console.log(appid);
    //console.log(appstatus);
    $.ajax({
        type: "POST",
        url: "backend/saveform_ajax.php",
        data: {
            //data goes here
            recpt,
            apply,
            appid,
            appstatus
        },
        success: function (data) {
            console.log(data);
            //data is returned here
            if (data == "SUCCESS") {
                alert("Done");
            } 
        }
    });

    for (let i = 1; i <= sem; i++) {
        seat = $("#sem-"+i+"-seat").val();
        month = $("#sem-"+i+"-mon").val();
        pointer = $("#sem-"+i+"-pointer").val();
        kt = $("#sem-"+i+"-kt").val();
        insertresult(i,seat,month,pointer,kt); 
    }
}

function insertresult(i,seat,month,pointer,kt) {

    $.ajax({
        type: "POST",
        url: "backend/insertresult_ajax.php",
        data: {
            //data goes here
            i,
            seat,
            month,
            pointer,
            kt
        },
        success: function (data) {
            //console.log(data);
            //data is returned here
            if (data == "SUCCESS") {
            } 
        }
    });
}