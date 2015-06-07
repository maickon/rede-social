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
		
		new Rotas(isset($_GET['p'])?$_GET['p']:'home');
		
		new FooterBar($labels, $links, "Maickon Rangel", "2015");
		
		$tag->script('src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"');
		$tag->script;
	$tag->body;
$tag->html;