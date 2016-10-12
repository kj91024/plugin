$(function(){
	/** Backend **/
	$(document).on("click","#kd-header .li",function(){
		index = parseInt($(this).index() - 1);
		$("#kd-header .li").removeClass("active");
		$("#kd-header .li").eq(index).addClass("active");

		$("#kd-panel-left .sidebar").removeClass("active");
		$("#kd-panel-left .sidebar").eq(index).addClass("active");
	})

	/** FrontEnd **/
	$(document).on("click","#kd-move .header .pull",function(){
		if($(this).hasClass("up")){
			$(this).removeClass("up").addClass("desc");
			$(this).find("i").removeClass("fa-sort-up").addClass("fa-sort-desc");
			$("#kd-move .content").show("blind", {}, 500);
		}else{
			$(this).removeClass("desc").addClass("up");
			$(this).find("i").removeClass("fa-sort-desc").addClass("fa-sort-up");
			$("#kd-move .content").hide("blind", {}, 500);
		}
	})
	$(document).on("click","#kd-move .header nav li",function(){
		index = $(this).index();
		attr = $(this).attr("data-id");
		_moveTab(index);
		_movePage(attr);
		$("#"+attr).addClass("active");
	})
	/**Especial**/
	$(document).on("click","#kd-register button.other",function(){
		var attr = $(this).attr("data-id");
		_moveTab(1);
		_movePage(attr);
		return false;
	})
	$(document).on("click","#kd-login button.other",function(){
		var attr = $(this).attr("data-id");
		_moveTab(2);
		_movePage(attr);
		return false;
	})
	$(document).on("click",".kd-user-button",function(){
   		var base = $("#kd-mycar, #kd-favorite, #kd-forum");
		var name = $.cookie("name");
        var avatar = $.cookie("avatar");
        
		/*Cerramos session*/
		$.cookie('name', null, { path: '/' });
		$.removeCookie('name', { path: '/' });

		$.cookie('avatar', null, { path: '/' });
		$.removeCookie('avatar', { path: '/' });

		boxMsn("Bye, "+name,0);
        base.fadeOut(200,function(){
            $(this).remove();
            reMoveLoginOff();
        });  
	})
	$(document).on("click",".kd-box-important button",function(){
		$(".kd-box-important").fadeOut(300,function(){
			$(this).remove();
		});
	});
	$(document).on("click",".add-car, .add-favorite",function(event){
		event.preventDefault();
		var id_post = $(this).attr("data-id");
		var relation = $(this).attr("class").replace("add-","").replace("remove-",""); 
		var type = $(this).attr("class").replace("-car","").replace("-favorite",""); 
		
		data = {"action":"buttonAction","id_post":id_post,"relation":relation,"type":type};
		sendAjax(data);
	})
});
function _moveTab(index){
	$("#kd-move .header nav li").removeClass("active");
	$("#kd-move .header nav li").eq(index).addClass("active");
}
function _movePage(attr){
	$("#kd-move .content .sidebar").removeClass("active");
	$("#"+attr).addClass("active");
}
