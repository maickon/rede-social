<?php

/*
 * __autoload()
 * Ele testa o carregamento aotomatico de cada classe instanciada
 * dentro de cada pasta que se encontra dentro da pasta class	
 */

//base path
define(BASE_PATH, dirname(__FILE__));
define(BASE_URL, 'http://127.0.0.1/rede-social-maickon');
define(USER_BASE_URL, 'http://127.0.0.1/rede-social-maickon/form/usuario');

//carrega a pasta funcoes
require_once BASE_PATH.'/funcoes/funcoes.php';

function __autoload($classname){
	$path = "class/";
	$diretorio = dir(BASE_PATH.'/'.$path);
	$dir = array();
	
	while($arquivo = $diretorio->read()):
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
//intancia de configuracao
$config = new Config();
//instancia de uma tag
$tag = new Tags();

//menus
$labels = array('Home','Projeto no Git','Sobre');
$links = array('?p=home','https://github.com/maickon/rede-social');

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