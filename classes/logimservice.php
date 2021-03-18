<?php

class LogimService
{
	public $conexao;
	public $logim;

	public function __construct($conexao, $logim)
	{
		$this->conexao = $conexao->conectar();
		$this->logim = $logim;
	}
	public function recuperar()
	{ //read
		$query = 'SELECT email, senha FROM usuario';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
	}
}