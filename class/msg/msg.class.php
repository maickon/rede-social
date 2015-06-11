<?php
/*
 * Classe Msg
 * Gerencia a identificação do tipo de 
 * erro ou sucesso e exibe a mensagem 
 * correta na tela
 * 
 * @author Maickon Rangel
 * @date 11/06/2015
 */

class Msg{

	private $erro_msg;
	private $succes_msg;
	
	/*
	 * __construct()
	 * Exibe uma menssagem de erro ou sucesso na tela.
	 * @param $type = vai ser o tipo de mensagem que vai vir na URL. Pode ser erro ou success
	 * @param $msg = vai identificar qual mensagem sera exibida conforma a nomenclatura do erro
	 */
	function __construct($type, $msg){
		$tag = new Tags();
		if($type == 'error'):
			$this->setup_erro_msg();
			$tag->div('class="alert alert-danger" role="alert"');
				$this->setup_verificar_error_msg($msg);
			$tag->div;
		elseif($type == 'success'):
			$this->setup_success_msg();
			$tag->div('class="alert alert-success" role="alert"');
				$this->setup_verificar_success_msg($msg);
			$tag->div;
		else:
			echo '';
		endif;
	}
	
	public function setup_erro_msg(){
		$this->erro_msg = array(
				
				'cadastro_error' 	=> 'Um erro ocoreu, os dados não foram cadastrados.',
				'login_error' 		=> 'Um erro ocoreu, login não foi realizado. Verifique sua senha.'
				
				);
	}
	
	public function setup_success_msg(){
		$this->succes_msg = array(
		
				'cadastro_success'	=> 'Cadastro realizado com sucesso.',
				'login_success' 	=> 'Login realizado com sucesso.'
	
		);
	}
	
	public function setup_verificar_error_msg($msg){
		
		foreach($this->erro_msg as $error_key => $error_msg):
			if($msg == $error_key):
				echo $error_msg;
				break;
			endif;
		endforeach;
	}
	
	public function setup_verificar_success_msg($msg){
	
		foreach($this->succes_msg as $success_key => $success_msg):
			if($msg == $success_key):
				echo $success_msg;
				break;
			endif;
		endforeach;
	}
	
}