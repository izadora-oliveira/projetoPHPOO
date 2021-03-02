<?php
class Cadastro
{
  //atributos
  public $nome;
  public $email;
  public $senha;

  //construtor da classe
  function __construct($nome_c, $email_c, $senha_c)
  {

    $this->nome = $nome_c;
    $this->email = $email_c;
    $this->senha = $senha_c;
  }

    // setters
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  //getters
  function getNome()
  {
    return $this->nome;
  }
  function getEmail()
  {
    return $this->email;
  }
  function getSenha()
  {
    return $this->senha;
  }

  //métodos
  function emailrepetido($email)
  {
    if ($this->email == $email){
      return "email ja existente no cadastro";
    }
    
    return "cadastro realizado com sucesso";
  }
}