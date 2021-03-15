<?php

class Conexao
{

	public $host = '127.0.0.1';
	public $dbname = 'estante';
	public $user = 'root';
	public $pass = '';


	public function conectar()
	{

		$conexao = new Pdointerface(
			"mysql:host=$this->host;dbname=$this->dbname",
			"$this->user",
			"$this->pass"
		);

		return $conexao;
	}
}