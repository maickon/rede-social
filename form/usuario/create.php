<?php

require_once '../../init.php';

$user = new Usuario();

$user->login = $_POST['cadastro']['login'];
$user->senha = md5($_POST['cadastro']['senha']);
$user->nome = $_POST['cadastro']['nome'];
$user->sobrenome = $_POST['cadastro']['sobrenome'];
$user->data_nascimento = $_POST['cadastro']['nascimento_ano'].'-'.$_POST['cadastro']['nascimento_mes'].'-'.$_POST['cadastro']['nascimento_dia'];
$user->ativo = 1;

$db = new Db_crud();


if($db->insere('usuario', $user->attr)):
	bild_lik_header(array('type'=>'error','msg'=>CADASTRO_ERROR),'index.php?');
else:
	bild_lik_header(array('type'=>'success','msg'=>CADASTRO_SUCCESS),'index.php?');
endif;