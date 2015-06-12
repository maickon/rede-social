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
define(PHPMEILER,BASE_PATH.'/plugins/PHPMailer/PHPMailerAutoload.php');
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

//menus pagina inicial
$labels = array('Home','Projeto no Git','Sobre','Contato');
$links = array('?p=home','https://github.com/maickon/rede-social','?p=sobre','?p=contato');

//menu pagina usuario
$user_menu = array('Me','Msg Feed','Music Feed', 'Video Feed', 'Foto Feed', 'Ranking', array('Config Me','Senha'));
$user_links = array('?p=me','?p=msgfeed','?p=musicfeed', '?p=videofeed', '?p=fotofeed', '?p=ranking', array('?p=configme','?=senha'));

define(HOME, 'home');
define(HOME_PAGE, 'pages/home.php');

define(SOBRE, 'sobre');
define(SOBRE_PAGE, 'pages/sobre.php');

define(CONTATO, 'contato');
define(CONTATO_PAGE, 'pages/contato.php');

//db
define(HOST, '127.0.0.1');
define(USER, 'root');
define(PASS, '');
define(DB_NAME, 'redesocialblog');


//difinicao de mensagens do sistema
//msgs de erro db
define(CADASTRO_ERROR, 'cadastro_error');
define(LOGIN_ERROR, 'login_error');
//msg de sucesso
define(CADASTRO_SUCCESS, 'cadastro_success');
define(LOGIN_SUCCESS, 'login_success');