<?php

class Cadastro implements Pdo
{
  //atributos
  public $nome;
  public $email;
  public $senha;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

  //métodos
  public function inserir()
	{ 

	}
}
