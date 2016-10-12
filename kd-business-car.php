<?php
/*
Plugin Name: KD-Carro de Negocio 
Description: Agrega un carrito de Negocios dentro del sitio. Donde los usuario podran ver un balanceo de las casas que quieran comprar rapidamente.
plugin URI: http://www.unlugar.com
Author: Kevin Sanchez y David 
Author URI: http://www.unlugar.com
*/
/** Session Iniciada**/
//session_start();

/** Variables Globales **/
define("DIR",plugin_dir_url(__FILE__));

/** Librerias **/
require_once("library/functions.php");
require_once("library/filters.php");

/*global $wpdb; 
$table_name= $wpdb->prefix . "banner";
$sql = "CREATE TABLE $table_name(
		id mediumint( 9 ) NOT NULL AUTO_INCREMENT ,
		banner text NOT NULL ,
		PRIMARY KEY ( `id` )    
		) ;";
$wpdb->query($sql);
$sql = "INSERT INTO $table_name (banner) VALUES ('Banner aqui');"; // Banner aqui es el valor por defecto que tendra el campo.
$wpdb->query($sql);*/


/** BackEnd **/
function kd_admin_tab(){
	add_menu_page("KD-Carro de Negocio","KD - Negocio","manage_options",__FILE__,"kd_admin_page");
}
add_action("admin_menu","kd_admin_tab");
function kd_admin_page(){
	ob_start();
		allStyles();
		adminPage();
	echo ob_get_clean();
}

/**	FrontEnd **/
function kd_js_css(){
	allStyles();	
}
add_action("wp_enqueue_styles","kd_js_css");
add_action("wp_enqueue_scripts","kd_js_css");
function kd_container(){
	containerPage();
}
add_action("wp_footer", "kd_container");

/** Filtros en General**/
add_filter("the_title","modified_title");

/** Insercion de Base de Datos **/
function kd_db() {
	global $wpdb;
	$table_name= $wpdb->prefix . "kd_users";
	$sql = "CREATE TABLE `$table_name` (
		   `ID` int(20) NOT NULL AUTO_INCREMENT,
		   `id_generated` varchar(20) NOT NULL,
		   `ask` int(1) NOT NULL,
		   `rpta` varchar(120) NOT NULL,
		   `email` varchar(220) NOT NULL,
		   `name` varchar(120) NOT NULL,
		   `avatar` varchar(120) NOT NULL,
		   PRIMARY KEY ( `ID` )
		   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
	$wpdb->query($sql);

	$table_name= $wpdb->prefix . "kd_action_related";
	$sql = "CREATE TABLE `$table_name` (
		   `ID` int(20) NOT NULL  AUTO_INCREMENT,
		   `id_user` int(20) NOT NULL,
		   `id_post` int(20) NOT NULL,
		   `type` int(1) NOT NULL,
		   PRIMARY KEY ( `ID` )
		   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
	$wpdb->query($sql);
} 
register_activation_hook( __FILE__, 'kd_db' );

/*
- cuando preciones en la seccion de precio casas similares aparecer
- 
*/
?>