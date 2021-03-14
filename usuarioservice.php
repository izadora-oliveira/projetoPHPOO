<?php


//usada para instância de um objeto que vai intermediar
//a gravação de uma tarefa no banco de dados (CRUD)
class TarefaService
{
	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa)
	{
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
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