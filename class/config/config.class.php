<?php
/**
 *	Classe de configuracao
 **/
class Config{
	function __construct(){
		$this->site_name 			= "Rede Social";
		$this->base_url		 		= "http://127.0.0.1/rede_social/";
		//css path
		$this->css_path				= "css/";
		$this->css_bootstrap 		= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css";
		$this->css_bootstrap_min 	= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css";
		$this->css_justified_nav 	= "http://getbootstrap.com/examples/justified-nav/justified-nav.css";
		
		//js path
		$this->js_path				= "js/";
		$this->js_bootstrap 		= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js";
		$this->js_jquery 			= "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js";
		$this->js_ 					= "http://getbootstrap.com/assets/js/docs.min.js";
		//classes
		$this->class_path			= "class/";
		
		//caminhos especifico
		$this->css_path_index		= "css/index.css";
		
		//cadastrar user
		$this->create_user_path		= "form/usuario/create.php";
		
		$this->login_path 			= "form/login/login.php";
		
		//contato
		$this->contato_path 		= "form/contato/contato.php";
	}
}
?>