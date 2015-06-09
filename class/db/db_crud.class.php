<?php

class Db_crud{
	private $conexao;
	private $db = DB_NAME;
	
	function __construct(){
		$this->set_db();
	}
	
	function set_db(){
		$this->conexao = new Db_connection();
		mysql_select_db($this->db);
		mysql_query("SET NAMES 'utf-8'");
		mysql_query("SET character_set_connection=utf-8");
		mysql_query("SET character_set_client=utf-8");
		mysql_query("SET character_set_results=utf-8");
		
	}
	
	function insere($table, array $colums){
		$query = "INSERT INTO {$table} ( ";
		foreach($colums as $colum => $dado):
			if(end($colums) == $dado):
				$query .= "{$colum} )";
			else:
				$query .= "{$colum},";
			endif; 
		endforeach;

		$query .= " VALUES ( ";
		foreach($colums as $colum => $dado):
			if(end($colums) == $dado):
				is_numeric($dado)?$dado = $dado:$dado = "'{$dado}'";
				$query .= "{$dado} )";
			else:
				is_numeric($dado)?$dado = $dado:$dado = "'{$dado}'";
				$query .= "{$dado},";
			endif; 
		endforeach;
		
		return mysql_query(utf8_decode($query));
	}

	function listar($table){
		$dados = array();
		$result = mysql_query("SELECT * FROM {$table}");
		while($frase_object = mysql_fetch_object($result)):
			 array_push($dados, $frase_object);
		endwhile;  
		return $dados;
	}

	function delete($table, $id){
		$query = mysql_query("DELETE FROM {$table} WHERE id = {$id}");
		return $query;
	}
	
	function buscar_usuario($table, $email, $senha){
		$senhaMd5 = md5($senha);
		$query = "SELECT * FROM {$table} WHERE login = '{$email}' AND senha = '{$senhaMd5}'";
		$resultado = mysql_query($query) or die(mysql_error());
		return mysql_fetch_object($resultado);
	}
	
}