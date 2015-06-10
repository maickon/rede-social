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