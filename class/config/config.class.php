<?php
/**
 *	Classe de configuracao
 **/
class Config{
	function __construct(){
		$this->site_name 			= "Rede Social";
		$this->base_url		 		= "http://127.0.0.1/rede_social/";
		$this->css_path				= "css/";
		$this->js_path				= "js/";
		$this->class_path			= "class/";
		
		//caminhos especifico
		$this->css_path_index		= "css/index.css";
		
		//cadastrar user
		$this->create_user_path		= "form/usuario/create.php";
		
		$this->login_path 			= "form/login/login.php";
	}
}
?>