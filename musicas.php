<?php

class Musica
{
    //atributos
  public $musicas = 0;
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
  function addmusica($nome, $cantor, $album)
  {
    $this->nome[$this->musicas] = $nome;
    $this->cantor[$this->musicas] = $cantor;
    $this->album[$this->musicas] = $album;
    $this->musicas++;
    return ($this->musicas);
  }
  function consultamusica()
  {
    
    return ;
  }
}