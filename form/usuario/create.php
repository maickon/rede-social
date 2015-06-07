<?php

require_once '../../init.php';

$tag = new Tags();
$tag->link('rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"');
$tag->link(' rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"');
$tag->link(' rel="stylesheet" href="'.$config->css_path_index.'"');
$tag->script('src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"');
$tag->script;

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = $_POST['cadastro']['senha'];
$user->nome = $_POST['cadastro']['nome'];
$user->sobrenome = $_POST['cadastro']['sobrenome'];

$db = new Db_crud();

if($db->insere('usuario', $user->attr)):
	$tag->div('class="alert alert-success" role="alert"');
		$tag->imprime(DB_MSG_SUCCESS);
	$tag->div;
else:
	$tag->div('class="alert alert-danger" role="alert"');
		$tag->imprime(DB_MSG_ERROR);
	$tag->div;
endif;