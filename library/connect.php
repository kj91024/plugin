<?php

require_once "../../../../wp-config.php";

/***
* Errores
* 0 -> No hay Errores
* 1 -> Error de Servidor
* 2 -> Error de Usuario
***/

$array = array();
$action = $_POST["action"];
if(!empty($action)){
	$dir_class ="classes/".$action.".class.php";
	if(!is_file($dir_class)){
		$array["error"] = 1;
		$array["error_msn"] = "No existe ".$action.".class.php";
		echo json_encode($array);
	}else{
		require_once $dir_class;
	}
}else{
	$array["error"] = 1;
	$array["error_msn"] = "El campo principal esta basio ".$action;
}
echo json_encode($array);
?>