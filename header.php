<?php
global $tag;
$tag->imprime('<!DOCTYPE html>');
$tag->html();
	$tag->head();
		$tag->title();
			$tag->imprime('Rede Social Title');
		$tag->title;
		
		$tag->link('rel="stylesheet" href="'.$config->css_bootstrap.'"');
		$tag->link(' rel="stylesheet" href="'.$config->css_bootstrap_min.'"');
		$tag->link(' rel="stylesheet" href="'.$config->css_path_index.'"');
		$tag->link(' rel="stylesheet" href="'.$config->css_justified_nav.'"');
		$tag->script('src="'.$config->js_bootstrap.'"');
		$tag->script;
		
	$tag->head;
	
	$tag->body();