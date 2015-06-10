<?php
/*
	classe TFooter
	classe responsavel por montar o rodape
	do site.
*/

class FooterBar{

	private $menus;
	private $links;
	private $programer;
	private $copyright;
	private $tag;
	/*
		Metodo construtor __construct()
		Responsavel por inicializar dois arrays,
		um contendo as referencias para os nomes de cada menu
		e outra para cada link deste menu.
	*/

	public function __construct(array $menus, array $links, $programer, $copy){
		$this->menus = $menus;
		$this->links = $links;
		$this->programer = $programer;
		$this->copyright = $copy;	
		$this->tag = new Tags();
		$this->config = new Config();
		$this->show();
	}

	/*
		Metodo footer_bar()
		Responsavel por montar uma barra de 
		rpdape atraves de um array de labels menus e links.
	*/

	public function footer_bar(){
		$this->tag->div('class="row"');
			$this->tag->div('id="footer" class="col-md-12" align="center"');	
	
				for($m=0; $m<count($this->menus); $m++):
					if(is_array($this->menus[$m]))://identifica se é um menu dropdown
					
						if($m == count($this->menus)-1):
							$this->tag->imprime(' - ');
							$this->tag->br();
							$this->tag->a('href="https://www.facebook.com/maickon.rangel" target="blank" class="footer-fonte"');
								$this->tag->imprime($this->programer);
							$this->tag->a;
							
							$this->tag->a('href="index.php" class="footer-fonte"');
								$this->tag->imprime($this->copyright);
							$this->tag->a;

						endif;
					
					else:
						$this->tag->imprime(' - ');
						$this->tag->a('href="index.php'.$this->links[$m].'"');
							$this->tag->imprime($this->menus[$m],'decode');
						$this->tag->a;
			
						if($m == count($this->menus)-1):
							$this->tag->imprime(' - ');
							$this->tag->br();
							$this->tag->a('href="https://www.facebook.com/maickonr" target="blank" class="footer-fonte"');
								$this->tag->imprime($this->programer);
							$this->tag->a;
							
							
							$this->tag->imprime($this->copyright);
						

						endif;
					endif;
				endfor;
			$this->tag->div;
		$this->tag->div;
	}

	/*
		Metodo show()
		Exibe o rodape.
	*/

	public function show(){
		$this->footer_bar();
	}
}

?>