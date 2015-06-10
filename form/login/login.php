<?php
session_start('login');
require_once '../../init.php';

$db = new Db_crud();

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = $_POST['cadastro']['senha'];

if($db->buscar_usuario('usuario', $user->login, $user->senha)):
	$_SESSION["user_ativo"] = $user->login;
	header('Location:'.USER_BASE_URL.'/index.php?login=true');
else:
	header('Location:'.BASE_URL.'/index.php?login=false');
endif;



