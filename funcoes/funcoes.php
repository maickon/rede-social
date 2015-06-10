<?php
$header_path = dirname(dirname(__FILE__));

function login_user($email, $senha){
	$_SESSION['email'] =  '';
}

/*
 * get_header()
 * retorna o caminho do cabeçalho
 */
function get_header(){
	global $header_path;
	return $header_path.'/header.php';
}

/*
 * get_footer()
*  retorna o caminho do rodape
*/
function get_footer(){
	global $header_path;
	return $header_path.'/footer.php';
}
