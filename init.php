<?php

/*
 * __autoload()
 * Ele testa o carregamento aotomatico de cada classe instanciada
 * dentro de cada pasta que se encontra dentro da pasta class	
 */

//base path
define(BASE_PATH, dirname(__FILE__));
define(BASE_URL, 'http://127.0.0.1/rede-social-maickon');

function __autoload($classname){
	$path = "class/";
	$diretorio = dir(BASE_PATH.'/'.$path);
	$dir = array();
	
	while($arquivo = $diretorio -> read()):
		$dir[] = $arquivo;
	endwhile;
	
	$diretorio -> close();
	if(PHP_OS == 'Linux'):
		$class_name = strtolower($class_name);
	endif;

	foreach($dir as $dir_names):
		if(file_exists(BASE_PATH."/$path$dir_names/{$classname}.class.php")):
			require_once strtolower(BASE_PATH."/$path$dir_names/{$classname}.class.php");
			break;
		endif;
	endforeach;
	
}

//menus
$labels = array('Home','Projeto no Git','Sobre', array('Tipos','Tipo 1','Tupo 2'));
$links = array('?p=home','?p=git','?p=sobre', array('#',' ?p=1','?p=2'));

define(HOME, 'home');
define(HOME_PAGE, 'pages/home.php');

define(SOBRE, 'sobre');
define(SOBRE_PAGE, 'pages/sobre.php');

//db
define(HOST, '127.0.0.1');
define(USER, 'root');
define(PASS, '');
define(DB_NAME, 'redesocialblog');


//msgs de erro db
define(DB_MSG_ERROR, 'Um erro ocoreu, os dados não foram cadastrados.');
define(DB_MSG_SUCCESS, 'Cadastro realizado com sucesso.');