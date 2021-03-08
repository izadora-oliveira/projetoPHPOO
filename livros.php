<?php

class Livros
{
    //atributos
  public $livros = 0;
  public $nome;
  public $autor;
  public $lancamento;
  public $meta;

  //construtor da classe
  function __construct($nome_c, $autor_c, $lancamento_c, $meta_c)
  {

    $this->nome = $nome_c;
    $this->autor = $autor_c;
    $this->lancamento = $lancamento_c;
    $this->meta = $meta_c;
  }

  // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setAutor($autor)
  {
    $this->autor = $autor;
  }
  public function setLancamento($lancamento)
  {
    $this->lancamento = $lancamento;
  }
  public function setMeta($meta)
  {
    $this->meta = $meta;
  }

  //getters
  function getNome()
  {
    return $this->nome;
  }
  function getAutor()
  {
    return $this->autor;
  }
  function getLancamento()
  {
    return $this->lancamento;
  }
  function getMeta()
  {
    return $this->meta;
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
  function vetodos()
  {
    
    return ;
  }
  
}