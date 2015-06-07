<?php
/**
 * @category Jogos RPG de Mesa
 * @contact maickon4developers@gmail.com
 * @version 2.0
 * @copyright 2014-2015 Dungeon Evolution
 * @link http:www.dungeonevolutio.orgfree.com
 *
 **/

class Tags{

	function __call($tag, $propiedades){
		echo '';
		if(!isset($propiedades[0])):
			if($tag == "meta"):
				echo "<$tag>\n";
			elseif($tag == "hr" || $tag == 'br' || $tag == 'img' || $tag == 'input' || $tag == 'link'):
				echo "<$tag/>\n";
			else:
				echo "<$tag>\n";
			endif;
		else:
			if($propiedades[0] == 'meta'):
				echo "<$tag $propiedades[0]>\n";
			elseif($propiedades[0] == 'hr' || $propiedades[0] == 'br' || $propiedades[0] == 'img' || $propiedades[0] == 'input' || $propiedades[0] == 'link'):
				echo "<$tag $propiedades[0] />\n";
			else:
				echo "<$tag $propiedades[0]>\n";
			endif;
		endif;
	}
	
	function __get($tag){
		echo "</$tag>\n";
	}
	
	function imprime($string, $modo=null){
		$barra_n = "\n";
		$tabulacao = "\t";
		if($modo == 'decode'):
			print $tabulacao.utf8_decode($string).$barra_n;
		elseif($modo == 'encode'):
			print $tabulacao.utf8_encode($string).$barra_n;
		else:
			print $tabulacao.$string.$barra_n;
		endif;
		
	}
	
	function loadCss($css_path,$import=false){
		if(opendir($css_path)):
			$pasta = opendir($css_path);
			$barra_n = "\n";
			$css = array();
			$i=0;
			while($p = readdir($pasta)):
				if($p != '.' and $p != '..'):
					$css[$i] = $p;
					$i++;
				endif;
			endwhile;
			
			$arqCss = $css;
			for($i=0;$i<count($arqCss);$i++):
				if($import == true):
					print '<style type="text/css">@import url("'.$css_path.$arqCss[$i].'");</style>'.$barra_n.'';
				else:
					print '<link href="'.$css_path.$arqCss[$i].'" rel="stylesheet"" />'.$barra_n.'';
				endif;
			endfor;
		else:
			return 0;
		endif;
	}
	
	function loadJs($js_path){
		if(opendir($js_path)):
			$pasta = opendir($js_path);
			$barra_n = "\n";
			$js = array();
			$i=0;
			while($p = readdir($pasta)):
				if($p != '.' and $p != '..'):
					$js[$i] = $p;
					$i++;
				endif;
			endwhile;
			
			$arqJs = $js;
			for($i=0;$i<count($arqJs);$i++):
				print '<script src="'.$js_path.$arqJs[$i].'"></script>'.$barra_n.'';		
			endfor;
		else:
			return 0;
		endif;
	}

	function loadClass($class_path){
		if(opendir($class_path)):
			$pasta = opendir($class_path);
			$barra_n = "\n";
			$js = array();
			$i=0;
			while($p = readdir($pasta)):
				if($p != '.' and $p != '..'):
					$js[$i] = $p;
					$i++;
				endif;
			endwhile;
			
			$arqJs = $js;
			for($i=0;$i<count($arqJs);$i++):
				print "require_once('.$js_path.$arqJs[$i].')".$barra_n;		
			endfor;
		else:
			return 0;
		endif;
	}
	
	function load($path){
		if(opendir($path)):
			$pasta = opendir($path);
			$barra_n = "\n";
			$file = array();
			$i=0;
			while($p = readdir($pasta)):
				if($p != '.' and $p != '..'):
					$file[$i] = $p;
					$i++;
				endif;
			endwhile;
			
			$files = $file;
			for($i=0;$i<count($files);$i++):
				print "require_once('.$path.$files[$i].')".$barra_n;		
			endfor;
		else:
			return 0;
		endif;
	}
}
?>
