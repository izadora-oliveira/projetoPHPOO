<?php

class Livros
{
    //atributos
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
  function consultalivro()
  {
    
    return ;
  }
  function adicionarlivro()
  {
    
    return ;
  }

  function excluirlivro()
  {
    
    return ;
  }
  function repetido($nome, $autor)
  {
    if ($this->nome == $nome and $this->autor == $autor){
      return " esse livro ja foi adcionado";
    }
    
    return "adcionado com sucesso";
  }
  
}