<?php
/*
	Classe criada com ajuda do livro PHP OO
	Escrita por Maickon Ranegel

	Esta classe prove os metodos necessarios para se trabalhar
	com a camada de apresentacao da aplicacao
*/

/*
	classe MenuBar
	classe responsavel por montar a barra de menu  
	do site.
*/


class MenuBar{

	private $site_name; //nome do site
	private $menus; //lista de menus 
	private $links; //lista de links para cada menu
	private $login; //tela de login
	private $tag;
	/*
		Metodo construtor __construct()
		Responsavel por inicializar dois arrays,
		um contendo as referencias para os nomes de cada menu
		e outra para cada link deste menu.
		@param $site_name = nome do site
		@param $menus = array contendo o nome de todos os menus
		@param $links = array contendo todos os links
	*/

	public function __construct(array $nomes, array $links, $login = null){
		$config = new Config();
		$this->tag = new Tags();
		$this->site_name = $config->site_name;
		$this->menus = $nomes;
		$this->links = $links;
		if($login):
			$this->login = $login;
		endif;
		$this->show();
	}

	/*
		Metodo menu_bar()
		Define uma hierarquia de menu com ou sem dropdrown
		de forma dinamica. Este metodo monta o menu 
		atraves dos atributos links e menus
	*/

	function menu_bar(){
		$this->tag->nav('class="navbar navbar-default"');
			$this->tag->div('class="container"');
				
				$this->tag->div('class="navbar-header"');
					$this->tag->button('type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"');
						$this->tag->span('class="sr-only"');
							$this->tag->imprime('Navegação');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
						
						$this->tag->span('class="icon-bar"');
						$this->tag->span;
							
					$this->tag->button;
					
					$this->tag->a('class="navbar-brand" href="index.php"');
							$this->tag->imprime($this->site_name);
					$this->tag->a;
				
				$this->tag->div;	
				
				$this->tag->div('id="navbar" class="navbar-collapse collapse"');
					$this->tag->ul('class="nav navbar-nav"');
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
								$this->tag->li();
									$this->tag->a('href="'.$this->links[$m].'"');
										$this->tag->imprime(($this->menus[$m]),'decode');
									$this->tag->a;
								$this->tag->li;											
							endif;				
						endfor;
						
					$this->tag->ul;
										
				$this->tag->div;//nav-collapse collapse
			$this->tag->div;			
		$this->tag->nav;//nav
	}

	/*
		Método show()
		Exibe o menu
	*/

	public function show(){
		$this->menu_bar();
	}
}