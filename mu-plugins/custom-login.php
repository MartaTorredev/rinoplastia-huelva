<?php

/**
 * Plugin name: Personalización del login de WordPress
 * Plugin URI: http://www.rinoplastiahuelva.com/
 * Description: Plugin de funcionalidades personalizadas para el login de WordPress
 * Version: 1.0
 * Author: OnDesarrollo
 * Author URI: https://ondesarrollo.com
 * License: GPL+3
 * 
 */

//Modificar el logo del login
add_action('login_enqueue_scripts','rp_login_logo');

function rp_login_logo(){

	?>

	<style type="text/css" media="screen">
		body.login div#login h1 a {
			background-image: url('#');
			background-size: 300px;
			height: 200px;
			width: auto;

	</style>

	<?php
}

//Modificar la url del logo
add_filter ('login_headerurl','rp_login_logo_link');

function rp_login_logo_link($url){

	return home_url();
}

//Modificar el texto del logo
add_filter('login_headertitle','rp_login_logo_title');

function rp_login_logo_title($message){

	$message = get_bloginfo('name');
	return $message;
}