<?php
class Usuario{
	public $attr;

	function __set($attr, $value){
		$this->attr[$attr] = $value;
	}

	function __get($attr){
		return $this->attr[$attr];
	}
}