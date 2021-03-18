<?php
require "estante.php";

class Musicas
{
    //atributos
  public $nome;
  public $cantor;
  public $album;
  public $lancamento;

  //construtor da classe
  function __construct($nome_c, $cantor_c, $album_c, $lancamento)
  {
    $this->nome = $nome_c;
    $this->cantor = $cantor_c;
    $this->album = $album_c;
    $this->lancamento = $lancamento;
  }

  // setters e getters
  public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}

  //método
  
}