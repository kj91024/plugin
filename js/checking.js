$(function(){
	$(document).on("submit","#kd-login .login",function(event){
		event.preventDefault();
		var code = $(this).find("input[name='code']");
		if(code.val() == ""){
			code.focus();
			code.addClass("kd-error");
		}else{
			code.removeClass("kd-error");

			/*Conexion Ajax al servidor*/
			data = {"action":"sessionAction","type":0,"code":code.val()};
			sendAjax(data);
		}
	});
	$(document).on("submit","#kd-register .register",function(event){
		event.preventDefault();

		var ask = $(this).find("select[name='ask']");
		var rpta = $(this).find("input[name='rpta']");
		var email = $(this).find("input[name='email']");
		if(rpta.val() == "" || ask.val() == ""){
			rpta.focus();
			rpta.addClass("kd-error");
		}else if(email.val() == ""){
			email.focus();
			email.addClass("kd-error");
		}else{
			rpta.removeClass("kd-error");
			email.removeClass("kd-error");
			
			/*Conexion Ajax al servidor*/
			data = {"action":"sessionAction","type":1,"ask":ask.val(),"rpta":rpta.val(),"email":email.val()};
			sendAjax(data);
		}
	})
});