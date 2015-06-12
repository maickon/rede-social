<?php
global $tag;
global $config;

$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-12"');
			$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->imprime('Entre em contato e deixe alguma sugestão.');
				$tag->div;
				
				$tag->div('class="panel-body"');
					$tag->form('action="'.$config->contato_path.'" method="post"');
					
						$tag->div('class="form-group"');
							$tag->label('for="nome"');
								$tag->imprime('Nome');
							$tag->label;
							$tag->input('type="text" required class="form-control" id="nome" placeholder="Informe o seu nome" name="cadastro[nome]"');
						$tag->div;
					
						$tag->div('class="form-group"');
							$tag->label('for="email"');
								$tag->imprime('E-mail');
							$tag->label;
							$tag->input('type="email" required class="form-control" id="email" placeholder="E-mail" name="cadastro[login]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" ');
						$tag->div;
					
						$tag->div('class="form-group"');
							$tag->label('for="mensagem"');
								$tag->imprime('Mensagem');
							$tag->label;
							$tag->textarea('class="form-control" rows="3" id="mensagem" placeholder="Deixe aqui a sua mensagem." name="cadastro[mensagem]" ');
							$tag->textarea;
						$tag->div;
		
						$tag->button('type="submit" class="btn btn-default"');
							$tag->imprime('Enviar');
						$tag->button;
					$tag->form;
				$tag->div;
			$tag->div;
		$tag->div;
	$tag->div;
$tag->div;