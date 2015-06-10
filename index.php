<?php

require_once 'init.php';

$config = new Config();
$tag = new Tags();

	require_once get_header();
	
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
		
		require_once get_footer();
		
		$tag->script('src="'.$config->js_jquery.'"');
		$tag->script;
	$tag->body;
$tag->html;