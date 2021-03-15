<?php
require "estante.php";

class Filmes extends Estante
{
  //atributos
  public $nome;
  public $lancamento;
  public $genero;
  public $local;

  //construtor da classe
  function __construct($tipo,$nome_c, $lancamento_c, $genero_c, $local_c)
  {
    $this->tipo = $tipo;
    $this->nome = $nome_c;
    $this->lancamento = $lancamento_c;
    $this->genero = $genero_c;
    $this->local = $local_c;
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

  //polimorfismo
  function metadomes()
    {
        if ($this->progresso = $this->meta) {
        echo "filmes assistidos este mes: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "você bateu sua meta mensal, parabéns!";
        } else {
        echo "filmes assitisdos este mes: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "ainda falta, continue assistindo!";
        }
    }
  //métodos
  function adicionar()
  {
    return "adcionar";
  }
  function excluir()
  {
    return "adcionar";
  }
  function editar()
  {
    return "adcionar";
  }

}