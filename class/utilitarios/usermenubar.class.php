<?php
/*
	classe usermenubar
	classe responsavel por montar a barra de menu  
	do site estilizado para a pagina inicial de um usuario
*/


class Usermenubar{

	private $user_name; //nome do usuario
	private $menus; //lista de menus 
	private $links; //lista de links para cada menu
	private $tag;
	/*
		Metodo construtor __construct()
		Responsavel por inicializar dois arrays,
		um contendo as referencias para os nomes de cada menu
		e outra para cada link deste menu.
		@param $user_name = nome do usuario
		@param $menus = array contendo o nome de todos os menus
		@param $links = array contendo todos os links
	*/

	public function __construct($user_name ,array $nomes, array $links){
		$config = new Config();
		$this->tag = new Tags();
		$this->user_name = $user_name;
		$this->menus = $nomes;
		$this->links = $links;
		$this->show();
	}

	/*
		Metodo menu_bar()
		Define uma hierarquia de menu com ou sem dropdrown
		de forma dinamica. Este metodo monta o menu 
		atraves dos atributos links e menus
	*/

	function menu_bar(){
		
			$this->tag->div('class="container"');
				
				$this->tag->div('class="masthead"');
					$this->tag->h3('class="text-muted"');
						$this->tag->imprime('Bem vindo '.$this->user_name);
					$this->tag->h3;

						$this->tag->ul('class="nav nav-justified"');
							for($m=0; $m<count($this->menus); $m++):					
								if(is_array($this->menus[$m]))://identifica se é um menu dropdown
									$this->tag->li('class="dropdown"');
										$this->tag->a('href="'.$this->links[$m][0].'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"');
											$this->tag->imprime($this->menus[$m][0]);
											$this->tag->span('class="caret"');
											$this->tag->span;
										$this->tag->a;	
										$this->tag->ul('class="dropdown-menu" role="menu"');
											for($d=1; $d<count($this->menus[$m]); $d++):
												$this->tag->li;																	
													$this->tag->a('href="'.$this->links[$m][$d].'"');
														$this->tag->imprime($this->menus[$m][$d],'decode');
													$this->tag->a;																				
												$this->tag->li;
											endfor;
										$this->tag->ul;
									$this->tag->li;
								else:
									$class = '';
									if($m == 0):
										$class = 'class="active"';
									endif;
									$this->tag->li($class);
										$this->tag->a('href="'.$this->links[$m].'"');
											$this->tag->imprime(($this->menus[$m]),'decode');
										$this->tag->a;
									$this->tag->li;											
								endif;				
							endfor;
							
						$this->tag->ul;
										
				$this->tag->nav;//nav-collapse collapse
			$this->tag->div;			
	}

	/*
		Método show()
		Exibe o menu
	*/

	public function show(){
		$this->menu_bar();
	}
}