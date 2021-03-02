<?php

class Livros
{
    //atributos
  public $livros = 0;
  public $nome;
  public $autor;
  public $lancamento;

  //construtor da classe
  function __construct($nome_c, $autor_c, $lancamento_c)
  {

    $this->nome = $nome_c;
    $this->autor = $autor_c;
    $this->lancamento = $lancamento_c;
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

  //método
  function addlivro($nome, $lancamento, $autor)
  {
    $this->nome[$this->livros] = $nome;
    $this->lancamento[$this->livros] = $lancamento;
    $this->autor[$this->livros] = $autor;
    $this->livros++;
    return ($this->livros);
  }
  function consultalivro()
  {
    
    return ;
  }
  
}