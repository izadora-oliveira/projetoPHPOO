<?php
class Filmes
{
  //atributos
  public $nome;
  public $lancamento;
  public $genero;

  //construtor da classe
  function __construct($nome_c, $lancamento_c, $genero_c)
  {

    $this->nome = $nome_c;
    $this->lancamento = $lancamento_c;
    $this->genero = $genero_c;
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

  //método
  function consultafilme()
  {
    
    return ;
  }
}