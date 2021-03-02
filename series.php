<?php

class Series
{
    //atributos
  public $nome;
  public $temporadas;
  public $lancamento;

  //construtor da classe
  function __construct($nome_c, $temporada_c, $lancamento_c)
  {

    $this->nome = $nome_c;
    $this->temporada = $temporada_c;
    $this->lancamento = $lancamento_c;
  }

  // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setTemporada($temporada)
  {
    $this->temporada = $temporada;
  }
  public function setLancamento($lancamento)
  {
    $this->lancamento = $lancamento;
  }

  //getters
  function getNome()
  {
    return $this->nome;
  }
  function getTemporada()
  {
    return $this->temporada;
  }
  function getLancamento()
  {
    return $this->lancamento;
  }
}