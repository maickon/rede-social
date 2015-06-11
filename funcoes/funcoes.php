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

/*
 * funcao bild_lik_header()
 * Esta função cria um link conforme 
 * os parametros passados e retorna o redirecionamento 
 * para uma pagina específica.
 * 
 * @param $url_base = é o caminho básico da aplicacao, por padrão recebe a URL base
 * 
 * @param array $url_composta = define os parametros adicional que vão dizer sobre o que exibir na tela.
 * Exemplo url: index.php?p=22&q=30 vai ficar assim passando por parametro: array('p'=>22,'q'=>30) e assim por diante
 * independente de quantos parametros sejam
 * 
 * @param $has_page =  identifica se existe uma pagina especifica antes do link composto.
 * Ex: o caminho base e http://127.0.0.1/, se eu passar index.php no parametro $has_page
 * o caminho final vai ficar assim: http://127.0.0.1/index.php. Se eu tiver mais parametros para 
 * passar na URL, se eu pegar o exemplo de parametro acima da $url_composta o link final ficaria 
 * assim: http://127.0.0.1/index.php?p=22&q=30
 * OBS: como este link possui parametros se faz necessário add o interrogação (?) após o index.php
 */
function bild_lik_header($url_base = BASE_URL, array $url_composta, $has_page = false){
	if($has_page):
		$final_link = $url_base.$has_page;
	else:
		$final_link = $url_base;
	endif;
		
	foreach($url_composta as $param => $value):
		if(end($url_composta) == $value):
			$final_link .= "{$param}={$value}";
		else:
			$final_link .= "{$param}={$value}&";
		endif;
	endforeach;
	
	return header("Location:{$final_link}");
}
