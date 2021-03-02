<?php

class Musica
{
    //atributos
  public $nome;
  public $cantor;
  public $album;

  //construtor da classe
  function __construct($nome_c, $cantor_c, $album_c)
  {

    $this->nome = $nome_c;
    $this->cantor = $cantor_c;
    $this->album = $album_c;
  }

  // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setCantor($cantor)
  {
    $this->cantor = $cantor;
  }
  public function setAlbum($album)
  {
    $this->album = $album;
  }

  //getters
  function getNome()
  {
    return $this->nome;
  }
  function getCantor()
  {
    return $this->cantor;
  }
  function getAlbum()
  {
    return $this->album;
  }

  //método
  function consultamusica()
  {
    
    return ;
  }
  function adicionarmusica()
  {
    
    return ;
  }

  function excluirmusica()
  {
    
    return ;
  }
  function repetido($nome, $cantor)
  {
    if ($this->nome == $nome and $this->cantor == $cantor){
      return " essa musica ja foi adcionada";
    }
    
    return "adcionado com sucesso";
  }
}