<?php

function get_feed_box($title){
	global $tag;
	$tag->div('class="col-lg-2"');
		$tag->div('class="panel backgraund_panel_score"');
			
			$tag->h3();
				$tag->imprime($title);
			$tag->h3;
			
			$tag->a('href="#"');
				$tag->span();
					$tag->imprime('Sara');
				$tag->span;
			$tag->a;
			
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
			
			$tag->imprime('Pontos');
			$tag->span('class="badge"');
				$tag->imprime('98670');
			$tag->span;
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
			
			$tag->imprime('Rank');
			$tag->span('class="badge"');
				$tag->imprime('90°');
			$tag->span;
			
			$tag->hr();
		
			$tag->a('href="#"');
			$tag->span();
			$tag->imprime('João');
			$tag->span;
			$tag->a;
				
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
				
			$tag->imprime('Pontos');
			$tag->span('class="badge"');
			$tag->imprime('8373');
			$tag->span;
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
				
			$tag->imprime('Rank');
			$tag->span('class="badge"');
			$tag->imprime('30°');
			$tag->span;
				
			$tag->hr();
			
			$tag->a('href="#"');
			$tag->span();
			$tag->imprime('João');
			$tag->span;
			$tag->a;
			
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
			
			$tag->imprime('Pontos');
			$tag->span('class="badge"');
			$tag->imprime('8373');
			$tag->span;
			$tag->br;
			$tag->span('class="glyphicon glyphicon-arrow-right"');
			$tag->span;
			
			$tag->imprime('Rank');
			$tag->span('class="badge"');
			$tag->imprime('30°');
			$tag->span;
			
		$tag->div;
	$tag->div;
}

function user_feed_show(){
	global $tag;
	$tag->div('id="user_status"');
		$feeds = array('menssagens','músicas','videos','fotos');
		foreach($feeds as $seletor):
			$tag->a('href="#"');
				$tag->span();
					$tag->imprime($seletor);
				$tag->span;
			$tag->a;
	
			$tag->table('class="table table-bordered"');
				$tag->tr();
					$tag->th();
						$tag->span('class="glyphicon glyphicon-arrow-right"');
						$tag->span;
					$tag->th;
				
					$tag->td();
						$tag->imprime('Pontos');
					$tag->td;
					
					$tag->td();
						$tag->span('class="badge"');
							$tag->imprime('100');
						$tag->span;
					$tag->td;
					
					$tag->td();
						$tag->imprime('Ranking');
					$tag->td;
					
					$tag->td();
						$tag->span('class="badge"');
							$tag->imprime('9876');
						$tag->span;
					$tag->td;
				$tag->tr;
			$tag->table;
		endforeach;
	$tag->div;
}

function buttons_post(){
	global $tag;
	$likes = array('?action=top' => 'Top', '?action=bom' => 'Bom', '?action=ruim' => 'Ruim', '?action=compartilhar' => 'Compartilhar');
	foreach($likes as $key => $botton):
		if(end($likes) == $botton):
			$tag->li('role="presentation"');
				$tag->a('href="'.$key.'"');
					$tag->imprime($botton);
				$tag->a;
			$tag->li;
		else:
			$tag->li('role="presentation"');
				$tag->a('href="'.$key.'"');
					$tag->imprime($botton);
					$tag->span('class="badge"');
						$tag->imprime('93');
					$tag->span;
				$tag->a;
			$tag->li;
		endif;
	endforeach;
}