<?php 

global $tag, $config;

$tag->div('class="container"');
	$tag->div('class="row"');
	
		$tag->div('class="col-md-8"');
			$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->imprime('Fa�a o seu Cadastro');
				$tag->div;
				
				$tag->div('class="panel-body"');
					$tag->form('action="'.$config->create_user_path.'" method="post"');						
						$tag->div('class="form-group"');
							$tag->label('for="email"');
								$tag->imprime('Login');
							$tag->label;
							$tag->input('type="email" class="form-control" id="email" placeholder="Senha" name="cadastro[login]"');
						$tag->div;
						
						$tag->div('class="form-group"');
							$tag->label('for="senha"');
								$tag->imprime('Senha');
							$tag->label;
							$tag->input('type="senha" class="form-control" id="senha" placeholder="Senha" name="cadastro[senha]"');
						$tag->div;
	
						$tag->div('class="form-group"');
							$tag->label('for="nome"');
								$tag->imprime('Nome');
							$tag->label;
							$tag->input('type="nome" class="form-control" id="nome" placeholder="Nome" name="cadastro[nome]"');
						$tag->div;
						
						$tag->div('class="form-group"');
							$tag->label('for="sobrenome"');
								$tag->imprime('Sobrenome');
							$tag->label;
							$tag->input('type="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome" name="cadastro[sobrenome]"');
						$tag->div;
						
						$tag->button('type="submit" class="btn btn-default"');
							$tag->imprime('Fazer o Cadastro');
						$tag->button;
					$tag->form;
				$tag->div;
			$tag->div;
		$tag->div;
			
		$tag->div('class="col-md-4"');
			$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->imprime('J� tem cadastro? Fa�a seu login');
				$tag->div;
				
				$tag->div('class="panel-body"');
					$tag->form(' action="/login" method="post"');
					
						$tag->div('class="form-group"');
							$tag->label('for="email"');
								$tag->imprime('Email');
							$tag->label;
							$tag->input('type="email" class="form-control" id="email" placeholder="E-mail/Senha" name="cadastro[login]"');
						$tag->div;
					
						$tag->div('class="form-group"');
							$tag->label('for="senha"');
								$tag->imprime('Senha');
							$tag->label;
							$tag->input('type="senha" class="form-control" id="senha" placeholder="Senha" name="cadastro[senha]"');
						$tag->div;
						
						$tag->button('type="submit" class="btn btn-default"');
							$tag->imprime('Logar');
						$tag->button;
					$tag->form;
				$tag->div;
			$tag->div;
		$tag->div;
		
	$tag->div;//container
$tag->div;//row