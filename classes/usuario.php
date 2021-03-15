<?php
require "conexao.php";
require "usuario.php";

class Usuario implements Pdo
{
  //atributos
  public $nome;
  public $email;
  public $senha;

  public function __construct($nome, $email, $senha)
	{
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
	}

    // setters e getters
  public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}

  //métodos
  public function inserir()
	{ //create
		$query = 'INSERT INTO usuario(nome, email, senha)VALUES(:nome,:email,:senha)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->nome->__get('nome'),':email', $this->email->__get('email'),':senha', $this->senha->__get('senha'));
		$stmt->execute();
	}
}
