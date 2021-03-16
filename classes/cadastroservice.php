<?php


//usada para instância de um objeto que vai intermediar
//a gravação de uma tarefa no banco de dados (CRUD)
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
		$stmt->bindValue(':nome', $this->tarefa->__get('nome'));
        $stmt->bindValue(':email', $this->tarefa->__get('email'));
        $stmt->bindValue(':senha', $this->tarefa->__get('senha'));
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