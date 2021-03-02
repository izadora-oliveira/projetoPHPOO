<?php
class Usuario
{
  //atributos
  public $nome;
  public $cpf;
  public $email;

  //construtor da classe
  function __construct($nome_c, $cpf_c, $email_c)
  {

    $this->nome = $nome_c;
    $this->cpf = $cpf_c;
    $this->email = $email_c;
  }

  // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }

  //getters
  function getNome()
  {
    return $this->nome;
  }
  function getCpf()
  {
    return $this->cpf;
  }
  function getEmail()
  {
    return $this->email;
  }
}