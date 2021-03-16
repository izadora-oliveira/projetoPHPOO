<?php

class CadastroService
{
	public $conexao;
	public $nome;
    public $email;
    public $senha;

	public function __construct($conexao, $nome, $email, $senha)
	{
		$this->conexao = $conexao->conectar();
		$this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
	}
	public function inserir()
	{ //create

		$query = 'INSERT INTO usuario(nome, email, senha)VALUES(:nome, :email, :senha)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
		$stmt->execute();
	}

	public function recuperar()
	{ //read
		//teste
		//teste434

	}

	public function atualizar()
	{ //update

	}

	public function remover()
	{ //delete

	}
}