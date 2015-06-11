<?php
session_start('login');
require_once '../../init.php';

$db = new Db_crud();

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = $_POST['cadastro']['senha'];

if($db->buscar_usuario('usuario', $user->login, $user->senha)):
	$_SESSION["user_ativo"] = $user->login;
	bild_lik_header(USER_BASE_URL, array('type'=>'success','msg'=>LOGIN_SUCCESS),'/index.php?');
else:
	bild_lik_header(array('type'=>'error','msg'=>LOGIN_ERRORS), 'index.php?');
endif;



