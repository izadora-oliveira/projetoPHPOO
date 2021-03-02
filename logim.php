<?php
class Cadastro
{
  //atributos
  public $email;
  public $senha;

  //construtor da classe
  function __construct($email_c, $senha_c)
  {
    $this->email = $email_c;
    $this->senha = $senha_c;
  }

    // setters
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  //getters
  function getEmail()
  {
    return $this->email;
  }
  function getSenha()
  {
    return $this->senha;
  }

  
}