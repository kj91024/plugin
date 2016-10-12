function boxMsnImportant(title, content, icon){
	if(icon != ""){
		switch(icon){
			case 0:break;
			case 1:break;
			case 2:break;
			case 3:break;
		}
	}
	$('<div>',{"class":"kd-box-important"}).append(
		$('<h2>',{"text":title}),
		$('<span>',{"html":content}),
		$('<button>',{"text":"Cerrar"})
	).hide().appendTo("body");

	var height = $(".kd-box-important").height();
	$(".kd-box-important").css({"margin-top":"-"+parseInt(height/2)+"px"}).fadeIn();
}
function boxMsn(msn, n){
	/** HTML generado por jQuery **/
	switch(n){
		case 0:
			$('<div>',{"class":"kd-box"}).append(
				$('<i>',{"class":"fa fa-smile-o"}),
				$('<span>',{"text":msn})
			).hide().appendTo("body");
		break;
		case 1:
			$('<div>',{"class":"kd-box"}).append(
				$('<i>',{"class":"fa fa-frown-o"}),
				$('<span>',{"text":msn})
			).hide().appendTo("body");
		break;
	}

	/** Estilo de la caja **/
	var box = $(".kd-box");
	var boxWidth = ($(".kd-box").width())/2;
	box.css({"margin-left":"-"+boxWidth+"px", "top":"-32px"}).show();
	box.animate({"top":"0px"});
	box.delay(2000).animate({"top":"-32px"},function(){
		box.remove();
	});
}
function reMoveLoginOn(name, avatar){
	$('#kd-move .header nav').fadeOut(400,function(){
		$(this).remove();
		$('<nav>').append(
			$('<div>',{'id':'kd-user'}).append(
				$('<div>',{'class':'kd-thumbnail'}).append(
					$('<img>',{"src":avatar})
				),
				$('<div>',{'class':'kd-name','text':name})
			),
			$('<div>',{'class':'kd-user-button'}).append(
				$('<button>').append(
					$('<i>',{"class":"fa fa-power-off"})
				)
			),
			$('<ul>').append(
				$("<li>",{"class":"active","data-id":"kd-welcome"}).prepend(
					$("<i>",{"class":"fa fa-home"})
				),
				$("<li>",{"data-id":"kd-mycar","text":"Mi carrito"}).prepend(
					$("<i>",{"class":"fa fa-shopping-cart"})	
				),
				$("<li>",{"data-id":"kd-favorite","text":"Favoritos"}).prepend(
					$("<i>",{"class":"fa fa-heart"})	
				),
				$("<li>",{"data-id":"kd-forum","text":"Forum"})
			),
			$('<form>',{"class":"kd-search"}).append(
				$('<button>').append(
					$('<i>',{"class":"fa fa-search"})
				),
				$('<label>').append(
					$('<input>',{"type":"text","placeholder":"Buscar Aqui adentro"})
				)
			),
			$('<button>',{"class":"pull desc"}).append(
				$('<i>',{"class":"fa fa-sort-desc"})
			)
		).hide().appendTo("#kd-move .header").delay(300).fadeIn();
		
		$('<div>',{"id":"kd-mycar","class":"sidebar"}).appendTo("#kd-move .content");
		$('<div>',{"id":"kd-favorite","class":"sidebar"}).appendTo("#kd-move .content");
		$('<div>',{"id":"kd-forum","class":"sidebar"}).appendTo("#kd-move .content");
		
		$("#kd-welcome").addClass("active");
	});
}
function reMoveLoginOff(){
	$('#kd-move .header nav').fadeOut(300,function(){
		$(this).remove();
		$('<nav>').append(
			$('<ul>').append(
				$("<li>",{"class":"active","data-id":"kd-welcome"}).append(
					$("<i>",{"class":"fa fa-home"})
				),
				$("<li>",{"data-id":"kd-login","text":"Iniciar Sesion"}),
				$("<li>",{"data-id":"kd-register","text":"Registrarse"})
			),
			$('<form>',{"class":"kd-search"}).append(
				$('<button>').append(
					$('<i>',{"class":"fa fa-search"})
				),
				$('<label>').append(
					$('<input>',{"type":"text","placeholder":"Buscar Aqui adentro"})
				)
			),
			$('<button>',{"class":"pull desc"}).append(
				$('<i>',{"class":"fa fa-sort-desc"})
			)
		).hide().appendTo("#kd-move .header").delay(300).fadeIn();

		$('<div>',{"id":"kd-login","class":"sidebar"}).append(
			$('<form>',{"class":"login"}).append(
				$('<label>').append(
					$('<input>',{"name":"code","type":"text","placeholder":"Pon tu código generado, porfavor"})
				),
				$('<div>',{"class":"n-button"}).append(
					$('<button>',{"text":"Iniciar Sesion"}),
					$('<button>',{"class":"other","data-id":"kd-register","text":"No tengo un código de Sesion"})
				)
			)
		).appendTo("#kd-move .content");

		$('<div>',{"id":"kd-register","class":"sidebar"}).append(
			$('<form>',{"class":"register"}).append(
				$('<select>',{"name":"ask"}).append(
					$('<option>',{"value":"1","text":"¿Como se llama tu profesor favorito?"}),
					$('<option>',{"value":"2","text":"¿Como se llama tu primera mascota?"}),
					$('<option>',{"value":"3","text":"¿Como se llama tu esposo/a?"}),
					$('<option>',{"value":"4","text":"¿Como se llama tu hermano/a?"})
				),
				$('<label>',{"class":"email"}).append(
					$('<input>',{"name":"email","type":"text","placeholder":"Escribe tu email"})
				),
				$('<label>').append(
					$('<input>',{"name":"rpta","type":"text","placeholder":"Escribe tu respuesta"})
				),
				$('<div>',{"class":"n-button"}).append(
					$('<button>',{"text":"Generar código de Sesion"}),
					$('<button>',{"class":"other","data-login":"kd-register","text":"Ya tengo un código de Sesion"})
				)
			)
		).appendTo("#kd-move .content");

		$("#kd-welcome").addClass("active");
	});
}