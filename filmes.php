<?php
class Filmes
{
  //atributos
  public $filmes = 0;
  public $nome;
  public $lancamento;
  public $genero;
  public $local;

  //construtor da classe
  function __construct($nome_c, $lancamento_c, $genero_c, $local_c)
  {

    $this->nome = $nome_c;
    $this->lancamento = $lancamento_c;
    $this->genero = $genero_c;
    $this->local = $local_c;
  }

  // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setLancamento($lancamento)
  {
    $this->lancamento = $lancamento;
  }
  public function setGenero($genero)
  {
    $this->genero = $genero;
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
  function getLancamento()
  {
    return $this->lancamento;
  }
  function getGenero()
  {
    return $this->genero;
  }
  function getLocal()
  {
    return $this->local;
  }

  //método
  function adicionar()
  {
    
    return ;
  }
  function consultar()
  {
    
    return ;
  }
  function vertodos()
  {
    
    return ;
  }
}