<?php

require_once 'init.php';

global $config;
global $tag;

	require_once get_header();
	
	
	global $labels;
	global $links;
	
	new MenuBar($labels, $links);
	
	$tag->div('class="container"');
		$tag->div('class="row"');
			$tag->div('class="col-md-12"');
				new Msg(
						isset($_GET['type'])?$_GET['type']:'default',
						isset($_GET['msg'])?$_GET['msg']:'default'
						);
			$tag->div;
		$tag->div;
	$tag->div;
	
	new Rotas(isset($_GET['p'])?$_GET['p']:'home');
	
	require_once get_footer();
	
	$tag->script('src="'.$config->js_jquery.'"');
	$tag->script;
	
$tag->html;