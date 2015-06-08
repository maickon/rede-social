<?php 

global $tag, $config;

$tag->div('class="container"');
	$tag->div('class="row"');
	
		$tag->div('class="col-md-8"');
			$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->imprime('Faça o seu Cadastro');
				$tag->div;
				
				$tag->div('class="panel-body"');
					$tag->form('action="'.$config->create_user_path.'" method="post"');						
						$tag->div('class="form-group"');
							$tag->label('for="email"');
								$tag->imprime('Login');
							$tag->label;
							$tag->input('type="email" class="form-control" id="email" required placeholder="Senha" name="cadastro[login]"');
						$tag->div;
						
						$tag->div('class="form-group"');
							$tag->label('for="senha"');
								$tag->imprime('Senha');
							$tag->label;
							$tag->input('type="password" class="form-control" id="senha" required placeholder="Senha" name="cadastro[senha]"');
						$tag->div;
	
						$tag->div('class="form-group"');
							$tag->label('for="nome"');
								$tag->imprime('Nome');
							$tag->label;
							$tag->input('type="nome" class="form-control" id="nome" required placeholder="Nome" name="cadastro[nome]"');
						$tag->div;
						
						$tag->div('class="form-group"');
							$tag->label('for="sobrenome"');
								$tag->imprime('Sobrenome');
							$tag->label;
							$tag->input('type="sobrenome" class="form-control" id="sobrenome" required placeholder="Sobrenome" name="cadastro[sobrenome]"');
						$tag->div;
						
						$tag->div('class="row"');
							$tag->div('class="form-group col-md-4"');
								$tag->label('for="nascimento"');
									$tag->imprime('Dia de nascimento');
								$tag->label;
								$tag->select('class="form-control" name="cadastro[nascimento_dia]"');
									$ano = date("Y");
									for($d=1; $d<=31; $d++):
										$zero = ($d<10) ? 0 : '';
										$tag->option('value="'.$zero.$d.'"');
											$tag->imprime($zero.$d);
										$tag->option;
									endfor;
								$tag->select;
							$tag->div;
						
							$tag->div('class="form-group col-md-4"');
								$tag->label('for="nascimento"');
									$tag->imprime('Mês de nascimento');
								$tag->label;
								$tag->select('class="form-control" name="cadastro[nascimento_mes]"');
									$ano = date("Y");
									$meses = array('','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
									for($d=1; $d<count($meses); $d++):
										$tag->option('value="'.$d.'"');
											$tag->imprime($meses[$d]);
										$tag->option;
									endfor;
								$tag->select;
							$tag->div;
							
							$tag->div('class="form-group col-md-4"');
								$tag->label('for="nascimento"');
									$tag->imprime('Ano de nascimento');
								$tag->label;
								$tag->select('class="form-control" name="cadastro[nascimento_ano]"');
									for($y=date("Y"); $y>=(date("Y")-100); $y--):
										$tag->option('value="'.$y.'"');
											$tag->imprime($y);
										$tag->option;
									endfor;
								$tag->select;
							$tag->div;
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
					$tag->imprime('Já tem cadastro? Faça seu login');
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