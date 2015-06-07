<?php
/**
 * 	Classe rotas
 *	Mapeia os links do site
 **/
class Rotas{

	function __construct($pagina){
		$this->rotear_pagina($pagina);
	}
	
	function rotear_pagina($pagina){
		switch($pagina):
			case HOME:require HOME_PAGE;
			break;

			case SOBRE:require SOBRE_PAGE;
			break;
			
			default: require HOME_PAGE;
			break;
		endswitch; 
	}
}
?>