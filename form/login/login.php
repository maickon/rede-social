<?php
session_start('login');
require_once '../../init.php';

$db = new Db_crud();

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = $_POST['cadastro']['senha'];

$user_db = $db->buscar_usuario('usuario', $user->login, $user->senha);
if($user_db):
	$_SESSION["user_ativo_login"] = $user_db->login;
	$_SESSION["user_ativo_nome"] = $user_db->nome;
	bild_lik_header(USER_BASE_URL, array('type'=>'success','msg'=>LOGIN_SUCCESS),'/index.php?');
else:
	bild_lik_header(array('type'=>'error','msg'=>LOGIN_ERRORS), 'index.php?');
endif;



