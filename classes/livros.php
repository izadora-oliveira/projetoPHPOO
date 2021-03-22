<?php

class Livros
{
    //atributos
  public $nome;
  public $autor;
  public $lancamento;


  // setters e getters
  public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}
  
}