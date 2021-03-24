<?php

class LoginService
{
	public $conexao;
	public $email;
	public $senha;
	public $logim;

	public function __construct(Conexao $conexao, Login $login)
	{
		$this->conexao = $conexao->conectar();
		$this->login= $login;
	}

	public function logar($email, $senha)
	{ 
		$query = "SELECT idusuario, nome, email, senha FROM usuario WHERE email = '$email' AND senha = $senha";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	

	
}

