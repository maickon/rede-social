<?php
session_start('login');
require_once '../../init.php';
require_once 'config.php';
global $tag;
require_once get_header();

global $user_menu;
global $user_links;

$tag->div('class="container"');
	new Usermenubar($_SESSION["user_ativo"] ,$user_menu, $user_links);
	$tag->div('class="row"');
		$tag->div('class="col-lg-4"');
			$tag->form('class="navbar-form navbar-left" role="search"');
				$tag->div('class="form-group"');
					$tag->input('type="text" class="form-control" placeholder="Buscar"');
				$tag->div;
				$tag->button('type="submit" class="btn btn-default"');
					$tag->imprime('Procurar');
				$tag->button;
			$tag->form;
		$tag->div;
		
		$tag->div('class="col-lg-8"');
			$tag->a('href="#"');
				$tag->img('class="icon_notification" src="../../img/icon-notification.png"');
			$tag->a;
			$tag->a('href="#"');
				$tag->img('class="icon_notification" src="../../img/icon-message.png"');
			$tag->a;
			$tag->a('href="#"');
				$tag->img('class="icon_notification" src="../../img/icon-friend.png"');
			$tag->a;
		$tag->div;
	$tag->div;
	
	
	$tag->div('class="row"');
		$tag->div('class="col-lg-8"');
			$tag->div('class="panel"');
				$tag->img('id="backgraund_user" class="thumbnail" src="../../img/capas_3.jpg"');
				$tag->img('id="gravatar_user" class="thumbnail" src="../../img/gravatar.jpg"');
			$tag->div;	
			
			$tag->div('class="panel"');
				
				$tag->form('method="post" action=""');
					$tag->div('class="form-group"');
						$tag->textarea('class="form-control" rows="3"');
						$tag->textarea;
					$tag->div;
					
					$tag->div('class="form-group"');
						$tag->button('type="submit" class="btn btn-default"');
							$tag->imprime('Postar');
						$tag->button;
					$tag->div;
					
				$tag->form;
			
			$tag->div;
			
			$tag->div('class="panel" id="user_post"');
				$tag->img('class="thumbnail" id="gravatar_user_post" src="../../img/gravatar.jpg"');
				$tag->div('id="user_top_box"');
				
					$tag->h3('id="user_post_title"');
						$tag->imprime('Usuario de Teste');
					$tag->h3;
					$tag->span('id="user_post_time"');
						$tag->imprime('Postado: 12h e 44min');
					$tag->span;
					
			
					$tag->p('id="user_post_content"');
						$tag->imprime(
								'O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.'
								);
					$tag->p;
					
					$tag->div('id="user_post_links"');
						$tag->ul('class="nav nav-pills" role="tablist"');
						
							buttons_post();
							
						$tag->ul;
					$tag->div;
				$tag->div;
			$tag->div;
			
			$tag->div('class="panel" id="user_post"');
				$tag->img('class="thumbnail" id="gravatar_user_post" src="../../img/gravatar.jpg"');
				$tag->div('id="user_top_box"');
				
					$tag->h3('id="user_post_title"');
						$tag->imprime('Usuario de Teste');
					$tag->h3;
					$tag->span('id="user_post_time"');
						$tag->imprime('Postado: 12h e 44min');
					$tag->span;
					
			
					$tag->p('id="user_post_content"');
						$tag->imprime(
								'O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.'
								);
					$tag->p;
					
					$tag->div('id="user_post_links"');
						$tag->ul('class="nav nav-pills" role="tablist"');
						
							buttons_post();
							
						$tag->ul;
					$tag->div;
				$tag->div;
			$tag->div;
			
		$tag->div;
	
		get_feed_box(MSG_TITLE);
		get_feed_box(MUSIC_TITLE);
		
		get_feed_box(VIDEO_TITLE);
		get_feed_box(FOTO_TITLE);
		
	$tag->div;
		
$tag->div;
require_once get_footer();