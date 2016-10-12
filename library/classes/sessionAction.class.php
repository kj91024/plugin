<?php
class sessionAction{
	public $_wpdb;
	private $_name;
	private $_avatar;
	private $_code;
	private $_ID;

	public function __construct(){
		global $wpdb;
		$this->_wpdb = $wpdb;
	}
	public function is_register($a = "", $b = "", $c = ""){
		if(!empty($a) && !empty($b) && !empty($c)){
			/** Register **/
			$query = "SELECT COUNT(*) AS num 
					  FROM `wp_kd_users` 
					  WHERE `email` = '".$c."'";
		 	$query_result = $this->_wpdb->get_results($query);
		 	return ($query_result[0]->num == 0) ? false : true;
		}elseif(!empty($a) && empty($b) && empty($c)){
			/** Login **/
			$query = "SELECT COUNT(*) AS num, ID, name, avatar
					  FROM `wp_kd_users` 
					  WHERE `id_generated` = '".$a."'";
		 	$query_result = $this->_wpdb->get_results($query);
		 	$this->_name = $query_result[0]->name;
		 	$this->_avatar = $query_result[0]->avatar;
		 	$this->_ID = $query_result[0]->ID;
		 	return ($query_result[0]->num == 0) ? false : true;
		}
	}

	/** Register **/
	private function idGenerate(){
		$st = true;
		while($st){
			$id = uniqid();
			$query = "SELECT COUNT(*) AS num
					  FROM `wp_kd_users`
					  WHERE `id_generated` = '$id'";

		 	$query_result = $this->_wpdb->get_results($query);
		 	if($query_result[0]->num == 0)
		 		return $id;
		}
	}
	public function insertRegister($ask, $rpta, $email, $name, $avatar){
		$id_generated = $this->idGenerate();
		$this->_code = $id_generated;
		$query = "INSERT INTO `wp_kd_users`(`ID`, `id_generated`, `ask`, `rpta`, `email`, `name`, `avatar`) 
				  VALUES (NULL, '$id_generated', '$ask','$rpta','$email','$name','$avatar')";
	 	$query_prepare = $this->_wpdb->prepare($query);
	 	$query_insert = $this->_wpdb->query($query_prepare);
	 	$this->_ID = $this->_wpdb->insert_id;
	}
	public function getCode(){ return $this->_code; }

	/** Login **/
	public function getName(){ return $this->_name; }
	public function getAvatar(){ return "http://localhost/wordpress/wp-content/plugins/kd-business-car/images/avatar/a120_".$this->_avatar.".jpg"; }
	public function getID(){ return $this->_ID; }
}

switch($_POST["type"]){
	case 0:  
		/** Inicio de Sesion **/
		$code = $_POST["code"];

		$sa = new sessionAction();
		if($sa->is_register($code)){

			$id 	= $sa->getID();
			$name   = $sa->getName();
			$avatar = $sa->getAvatar();

			/*Creamos la Session del usuario*/
            setcookie('id', $id, time()+60*60*24*365, '/');
			setcookie('name', $name, time()+60*60*24*365, '/');
            setcookie('avatar', $avatar, time()+60*60*24*365, '/');

			$array["error"] = 0;
		}else{
			$array["error"] = 2;
			$array["error_msn"] = "No existe este código";
		}
	break;
	case 1:  
		/** Registro **/
		/*Evitamos las inyecciones de codigo SQL*/
		$ask  = esc_sql($_POST["ask"]);
		$rpta = esc_sql($_POST["rpta"]);
		$email= esc_sql($_POST["email"]);
		$name = explode("@",$email)[0];
		$avatar = rand(0,9);

		/*Comprobamos que no esten basios*/
		if(empty($ask) && empty($rpta) && empty($email)){
			$array["error"] = 2;
			$array["error_msn"] = "Hay campos basios";	
		}else{
			$sa = new sessionAction();
			if(!$sa->is_register($ask, $rpta, $email)){
				$sa->insertRegister($ask, $rpta, $email, $name, $avatar);

				$id 	= $sa->getID();
				$code 	= $sa->getCode();
				$avatar = $sa->getAvatar();

				/*Creamos la Session del usuario*/
            	setcookie('id', $id, time()+60*60*24*365, '/');
            	setcookie('name', $name, time()+60*60*24*365, '/');
            	setcookie('avatar', $avatar, time()+60*60*24*365, '/');

            	$array["msn"] = "Este es tu codigo <b>$code</b> Sabemos que este codigo es dificil de recordar, pero no te preocupes te lo enviaremos a tu email";
				$array["error"] = 0;
			}else{
				$array["error"] = 2;
				$array["error_msn"] = "Ya existe este email";
			}
		}
	break;
	case 2:
		/** Cerrar Session **/
		session_destroy();
	break;
}
?>