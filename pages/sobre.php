<?php
global $tag;

$tag->div('class="container"');

	$tag->div('class="page-header"');
		$tag->h1();
			$tag->imprime('Como come�ou esta id�ia...');
		$tag->h1;
		
		$tag->p('class="lead"');
			$tag->imprime('
					A ideia destre projeto come�ou a partir do momento que encontrei um blog pertencente a
					Reginaldo Junior <a href="http://blog.winnersdesenvolvimento.com.br/blog/" target="blank"><b>winnersdesenvolvimento</b></a>.
					No blog dele eu encontrei uma s�rie de postagens do pr�prio Reginaldo ensinando a desenvolver uma rede social.
					Como eu sempre tive vontade de algum dia desenvolver uma Rede Social, fiquei completamente interessado em contribuir
					e logo ap�s entrar em contato com ele, resolvi criar um c�digo de modelo base para apresenta-lo.');
		$tag->p;

		$tag->h3();
			$tag->imprime('Pesquisando...');
		$tag->h3;
		
		$tag->p();
		$tag->imprime('
					Bem, desde que escrevi os primeiros trechos de c�digo, n�o consegui ficar parado e esperar por uma resposta do Reginaldo
					sobre aquele c�digo de modelo. Pesquisei por algum c�digo sobre rede social e acabei encontrado um link interessante
					<a href="https://github.com/alexjosesilva/Rede-Social-em-Php" target="blank">https://github.com/alexjosesilva/Rede-Social-em-Php</a>. Neste 
					projeto eu encontrei um clone da rede social Facebook. Rapidamente instalei na minha m�quina para ver como � e fiquei abismado.
					Muito bacana este c�digo.');
		$tag->p;
		
		$tag->h3();
			$tag->imprime('Desenvolvendo...');
		$tag->h3;
		
		$tag->p();
		$tag->imprime('
					Desde ent�o eu venho atualizando este c�digo e produzindo alguma coisa. Creio que at� ficar do jeito que espero
					vai levar bastante tempo, entretanto o prazer de desenvolver uma rede social, pesquisar sobre o assunto e aprender 
					n�o tem pre�o.');
		$tag->p;
		
		$tag->h3();
		$tag->imprime('Finalizando...');
		$tag->h3;
		
		$tag->p();
		$tag->imprime('
					� tudo isso que tenho a dizer, estou muito satisfeito. Link do projeto aqui: 
					<a href="https://github.com/maickon/rede-social" target="blank">Rede Social - Maickon</a>.
					<br />
					Fui!
					');
		$tag->p;
	$tag->div;
$tag->div;