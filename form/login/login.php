<?php

require_once '../../init.php';

$db = new Db_crud();

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = md5($_POST['cadastro']['senha']);

echo '<br>';
echo $user->login;
echo '<br>';
echo $user->senha;

if($db->buscar_usuario('usuario', $user->login, $user->senha)):
	echo 'sucesso';
else:
	echo 'fracasso';
endif;



