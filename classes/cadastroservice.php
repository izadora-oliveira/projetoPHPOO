<?php

class CadastroService
{
	public $conexao;
	public $cadastro;

	public function __construct($conexao, $cadastro)
	{
		$this->conexao = $conexao->conectar();
		$this->cadastro = $cadastro;
	}
	public function inserir()
	{ //create

		$query = 'INSERT INTO usuario(nome, email, senha)VALUES(:nome, :email, :senha)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->cadastro->__get('nome'));
        $stmt->bindValue(':email', $this->cadastro->__get('email'));
        $stmt->bindValue(':senha', $this->cadastro->__get('senha'));
		$stmt->execute();
	}
}