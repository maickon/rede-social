<?php

require_once 'init.php';

$config = new Config();
$tag = new Tags();
echo 
$tag->imprime('<!DOCTYPE html>');
$tag->html();
	$tag->head();
		$tag->title();
			$tag->imprime('Rede Social Title');
		$tag->title;
		
		$tag->link('rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"');
		$tag->link(' rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"');
		$tag->link(' rel="stylesheet" href="'.$config->css_path_index.'"');
		$tag->script('src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"');
		$tag->script;
		
	$tag->head;
	
	$tag->body();
		global $labels;
		global $links;
		
		new MenuBar($labels, $links);
		
		$tag->div('class="container"');
			$tag->div('class="row"');
				$tag->div('class="col-md-12"');
					if(isset($_GET['success']) && $_GET['success'] == 'true'):
						$tag->div('class="alert alert-success" role="alert"');
							$tag->imprime(DB_MSG_SUCCESS);
						$tag->div;
					elseif(isset($_GET['success']) && $_GET['success'] == 'false'):
						$tag->div('class="alert alert-danger" role="alert"');
							$tag->imprime(DB_MSG_ERROR);
						$tag->div;
					else:
					
					endif;
				$tag->div;
			$tag->div;
		$tag->div;
		
		new Rotas(isset($_GET['p'])?$_GET['p']:'home');
		
		new FooterBar($labels, $links, "Maickon Rangel", "2015");
		
		$tag->script('src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"');
		$tag->script;
	$tag->body;
$tag->html;