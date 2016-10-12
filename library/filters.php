<?php
/*
* cleanRareCharacter
* Limpia caracteres raros, solo acepta los carateres del abecedario y los numeros	
* (string) $string texto a modificar
* (int) return integer
*/
function cleanCharacter($string){
	$num = (int)preg_replace("/[^0-9a-zA-Z ]/","", $string);
	return $num;
}
http://localhost/wordpress/wp-content/plugins/kd-business-car/admin.php
/**/
function modified_title($text){
	global $wpdb;
	if(!is_admin() AND in_the_loop()){
		$temp = explode("|", $text);
		
		$id_post = get_the_ID();
		$id_user = $_COOKIE["id"];
		$class = "add";
		if($id_user){
			
			$query = "SELECT COUNT(*) AS num
					  FROM `wp_kd_action_related`
					  WHERE `id_post` = '$id'
					  	AND `id_user` = '$id_user'
					  	AND `type` = 0";

		 	$query_result = $wpdb->get_results($query);
		 	$class = ($query_result[0]->num == 0)? "add" : "remove";
		}

		if(count($temp) > 1){
			$cnum = cleanCharacter($temp[0]);
			if(is_numeric($cnum) ){
				$temp[0] = '<span>'.$temp[1].'</span>';
				$temp[1] = '
					<div class="kd-user-buttons">
						<div class="kd-buttons-left">
							<button class="'.$class.'-car" data-id="'.$id_post.'" title="carrito de compras">
							<i class="fa fa-shopping-cart"></i></button>
						</div>
						<div class="kd-buttons-right">
							<button class="price">$'.number_format($cnum,0,".",".").'</button>
						</div>
					</div>';
			}
			$temp = implode($temp);
			$text = $temp;
		}else{
			$text = "<span>".$text.'</span><div class="kd-user-buttons">
						<button class="'.$class.'-favorite" data-id="'.$id_post.'"  title="favoritos">
							<i class="fa fa-heart"></i>
						</button>
					</div>';
		}
	}
	return $text;
}