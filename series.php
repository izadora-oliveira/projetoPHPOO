<?php

class Series
{
    //atributos
  public $nome;
  public $temporadas;
  public $lancamento;
  public $local;

  //construtor da classe
  function __construct($nome_c, $temporada_c, $lancamento_c, $local_c)
  {

    $this->nome = $nome_c;
    $this->temporada = $temporada_c;
    $this->lancamento = $lancamento_c;
    $this->local = $local_c;
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
  public function setLocal($local)
  {
    $this->local = $local;
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
  function getLocal()
  {
    return $this->local;
  }

  //método
  function adicionar()
  {
    return;
  }
  function consultar()
  {
    
    return ;
  }
  function vetodos()
  {
    
    return ;
  }
}