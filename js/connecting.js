var connect = "http://localhost/wordpress/wp-content/plugins/kd-business-car/library/connect.php";
function sendAjax(data){
	$.ajax({
    	method: "POST",
        url: connect,
        data: data,
        dataType: "json",
        beforeSend:function(){
        	switch(data.action){
            	case "sessionAction": sessionBeforeAction(); break;
            }
            showLoad();
        },
        success:function(response) {
            console.log(response);
            switch(data.action){
                case "sessionAction": sessionAction(response, data.type); break;
            }
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

/** sessionAction **/
function sessionBeforeAction(){
    var base = $("#kd-login, #kd-register");
    base.find(".background").show();
    base.animate({"opacity":"0.3"});
}
function sessionAction(response, type){
    var base = $("#kd-login, #kd-register");
    base.find(".background").hide();
    hideLoad();
    switch(response.error){
        case 0:
            var name = $.cookie("name");
            var avatar = $.cookie("avatar");
            
            boxMsn("Bienvenido, "+name,0);
            base.fadeOut(300,function(){
                $(this).remove();
                reMoveLoginOn(name, avatar);

                if(type == 1)
                    boxMsnImportant("Importante",response.msn);
            });
            break;
        case 2: 
            base.animate({"opacity":"1"});
            boxMsn(response.error_msn,1); 
        break;
    }
}
$.cookie(); 
/** Estilos Universales **/
function showLoad(){ $("#kd-background").fadeIn(); }
function hideLoad(){ $("#kd-background").fadeOut(); }