<?php
require_once '../../init.php';
$user = new Usuario();
require_once PHPMEILER;

$user->nome 	= $_POST['cadastro']['nome'];
$user->email 	= md5($_POST['cadastro']['email']);
$user->mensagem = $_POST['cadastro']['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'sntp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "maickon4developers@gmail.com";
$mail->Password = "Maickonr@gmail.com";

$mail->setFrom("maickon4developers@gmail.com", "Fomulário de envio [Rede Social]");
$mail->addAddress("maickon4developers@gmail.com");
$mail->Subject = "Email de contato da página Rede Social";

$mail->msgHTML("<html>De:{$user->nome}<br>email:{$user->email}<br>mensagem:{$user->mensage}</html>");
$mail->AltBody = "De:{$user->nome}\nemail:{$user->email}\nmensagem:{$user->mensage}"; 

if($mail->send()):
	bild_lik_header(BASE_URL, array('type'=>'success','msg'=>'Email enviado com sucesso.'));
else:
	bild_lik_header(BASE_URL, array('type'=>'error','msg'=>'Email não foi enviado.'.$mail->ErrorInfo));
endif;