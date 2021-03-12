<?php
require "estante.php";

class Series extends Estante
{
    //atributos
  public $nome;
  public $temporadas;
  public $lancamento;

  //construtor da classe
  function __construct($tipo, $nome_c, $temporada_c, $lancamento_c)
  {
    $this->tipo = $tipo;
    $this->nome = $nome_c;
    $this->temporada = $temporada_c;
    $this->lancamento = $lancamento_c;
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