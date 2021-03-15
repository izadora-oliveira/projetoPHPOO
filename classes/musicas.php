<?php
require "estante.php";

class Musicas
{
    //atributos
  public $nome;
  public $cantor;
  public $album;

  //construtor da classe
  function __construct($tipo, $nome_c, $cantor_c, $album_c)
  {
    $this->tipo = $tipo;
    $this->nome = $nome_c;
    $this->cantor = $cantor_c;
    $this->album = $album_c;
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
  function adicionar()
  {
    
  }
  function excluir()
  {
    
  }
  function editar()
  {
    
  }
  
}