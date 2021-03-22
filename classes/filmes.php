<?php

class Filmes
{
  //atributos
  public $idusuario;
  public $imagem;
  public $nome;
  public $lancamento;
  public $genero;
  public $lugar;

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