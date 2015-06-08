<?php

require_once '../../init.php';

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = $_POST['cadastro']['senha'];
$user->nome = $_POST['cadastro']['nome'];
$user->sobrenome = $_POST['cadastro']['sobrenome'];
$user->data_nascimento = $_POST['cadastro']['nascimento_ano'].'-'.$_POST['cadastro']['nascimento_mes'].'-'.$_POST['cadastro']['nascimento_dia'];
$user->ativo = 1;

$db = new Db_crud();

if($db->insere('usuario', $user->attr)):
	header('Location:'.BASE_URL.'/index.php?success=true');
else:
	header('Location:'.BASE_URL.'/index.php?success=false');
endif;