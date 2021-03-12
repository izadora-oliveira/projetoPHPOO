<?php
require "estante.php";

class Livros extends Estante
{
    //atributos
  public $nome;
  public $autor;
  public $lancamento;
  public $meta;
  public $lidos = 0;

  //construtor da classe
  function __construct($tipo, $nome_c, $autor_c, $lancamento_c, $meta_c)
  {
    $this->tipo = $tipo;
    $this->nome = $nome_c;
    $this->autor = $autor_c;
    $this->lancamento = $lancamento_c;
    $this->meta = $meta_c;
    $this->lidos += 1;
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
  function meta($meta)
  {
    if ($this->lidos = $this->meta) {
      echo "livros lidos este mes: ",$this->lidos;
      echo "meta estipulada: ",$this->meta;
      echo "você bateu sua meta mensal, parabéns!";
    } else {
      echo "livros lidos este mes: ",$this->lidos;
      echo "meta estipulada: ",$this->meta;
      echo "ainda falta, continue lendo!";
    }
  }
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