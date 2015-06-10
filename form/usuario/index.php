<?php
session_start('login');
require_once '../../init.php';
require_once 'config.php';
global $tag;
require_once get_header();
$menu = array('Me','Msg Feed','Music Feed', 'Video Feed', 'Foto Feed', 'Ranking', array('Config Me','Senha'));
$links = array('?p=me','?p=msgfeed','?p=musicfeed', '?p=videofeed', '?p=fotofeed', '?p=ranking', array('?p=configme','?=senha'));

$tag->div('class="container"');
	new Usermenubar($_SESSION["user_ativo"] ,$menu, $links);
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
				$tag->img('id="backgraund_user" class="thumbnail" src="../../img/capas_2.jpg"');
				$tag->img('id="gravatar_user" class="thumbnail" src="../../img/gravatar.jpg"');
			$tag->div;	
			
			$tag->div('class="panel"');
			
				$tag->span('id="username"');
					$tag->imprime($_SESSION["user_ativo"]);
				$tag->span;
				
				$tag->div('class="well well-sm" id="msg_box_user"');
				$tag->imprime('Compartilhe alguma coisa interessante, seus amigos querem saber.');
				$tag->div;
				
				$tag->form();
					$tag->textarea('class="form-control" rows="3"');
					$tag->textarea;
					$tag->button('type="submit" class="btn btn-default"');
						$tag->imprime('Postar');
					$tag->button;
				$tag->form;
			
			$tag->div;
			
		$tag->div;
	
		get_feed_box(MSG_TITLE);
		get_feed_box(MUSIC_TITLE);
		
		get_feed_box(VIDEO_TITLE);
		get_feed_box(FOTO_TITLE);
		
	$tag->div;
		
$tag->div;
require_once get_footer();