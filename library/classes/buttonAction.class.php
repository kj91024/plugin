<?php
class buttonAction{
	private $_wpdb;
	private $_id_user;
	private $_id_post;
	private $_type;
	
	public function __construct($id_user, $id_post, $type){
		global wpdb;
		$this->_wpdb;
		/*Inicializamos las variables con quer trabajaremos en todo el programa*/
		$this->_id_user = $id_user;
		$this->_id_user = $id_post;
		$this->_id_user = $id_type;
	}
	public prevInsertAction(){
		$query = "SELECT COUNT(*) AS num 
				  FROM `wp_kd_action_related` 
				  WHERE `id_post` = '".$c."'
				  AND `id_user` = '".$this->_id_user."'
				  AND `id_post` = '".$this->_id_post."'
				  AND `type` = '".$this->_type."'
				  ";
	 	$query_result = $this->_wpdb->get_results($query);
	 	return ($query_result[0]->num == 0) ? false : true;
	}
	public insertAction(){
		$query = "INSERT INTO `wp_kd_action_related`(`ID`, `id_user`, `id_post`, `type`) 
				  VALUES (NULL, ".$this->_id_user.",".$this->_id_post.",".$this->_id_type.")";
	 	$query_prepare = $this->_wpdb->prepare($query);
	 	$query_insert = $this->_wpdb->query($query_prepare);
	}
	public prevDeleteAction(){

	}
	public deleteAction(){

	}

}

$id_user = $_COOKIE["id"];
$st = true;

if($id_user && $_COOKIE[name] && $_COOKIE[avatar]){
	$id_post = $_POST["id_post"];
	$type = $_POST["type"];
	$ba = new buttonAction($id_user, $id_post, $type);
	switch($_POST["relation"]){
		case "car": 		$type = 0; break;
		case "favorite":	$type = 1; break;
		default:
			$st = false;
			$array["error"] = 1;
			$array["error_msn"] = "No existe esta 'relation'";
		break;
	}
	if($st){
		switch($_POST["type"]){
			case "add":
				if($ba->prevInsertAction()){
					$ba->insertAction();
					$array["error"] = 0;	
					$array["data"] = $ba->getInfo();
					$array["msn"] = "Se a añadido";
				}else{
					$array["error"] = 2;
					$array["error_msn"] = "Ya lo has añadido";
				}	
			break;
			case "remove":
				if($ba->prevDeleteAction())
					$ba->deleteAction();
					$array["error"] = 0;	
					$array["data"] = $ba->getInfo();
					$array["msn"] = "Se a eliminado";
				else{
					$array["error"] = 2;
					$array["error_msn"] = "Ya lo has removido";	
				}
			break;
			default:
				$array["error"] = 1;
				$array["error_msn"] = "No existe este 'type'";
			break;
		}
	}
}else{
	$array["error"] = 2;
	$array["error_msn"] = "Lo sentimos, tienes que iniciar sesion";	
}
?>