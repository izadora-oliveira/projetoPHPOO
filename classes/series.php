<?php

class Series
{
    //atributos
  public $imagem;
  public $nome;
  public $temporadas;
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