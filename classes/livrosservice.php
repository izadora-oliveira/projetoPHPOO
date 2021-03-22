<?php

class LivrosService
{
	public $conexao;
	public $livros;

	public function __construct($conexao, $livros)
	{
		$this->conexao = $conexao->conectar();
		$this->livros = $livros;
	}

function adicionar()
  {
        $query = 'INSERT INTO livros(imagem, nome, autor, lancamento, nota)VALUES(:imagem, :nome, :autor, :lancamento, :nota)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':imagem', $this->livros->__get('imagem'));
		$stmt->bindValue(':nome', $this->livros->__get('nome'));
        $stmt->bindValue(':autor', $this->livros->__get('autor'));
        $stmt->bindValue(':lancamento', $this->livros->__get('lancamento'));
		$stmt->bindValue(':nota', $this->livros->__get('nota'));
		$stmt->execute();
  }
  function excluir()
  {
    return "adcionar";
  }
  function editar()
  {
    return "adcionar";
  }
}