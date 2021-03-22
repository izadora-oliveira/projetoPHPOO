<?php

class FilmesService
{
	public $conexao;
	public $cadastro;

	public function __construct($conexao, $filmes)
	{
		$this->conexao = $conexao->conectar();
		$this->filmes = $filmes;
	}

function adicionar()
  {
        $query = 'INSERT INTO filmes(imagem, nome, lancamento, genero, lugar)VALUES(:imagem, :nome, :lancamento, :genero, :lugar)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':imagem', $this->filmes->__get('imagem'));
		$stmt->bindValue(':nome', $this->filmes->__get('nome'));
        $stmt->bindValue(':lancamento', $this->filmes->__get('lancamento'));
        $stmt->bindValue(':genero', $this->filmes->__get('genero'));
		$stmt->bindValue(':lugar', $this->filmes->__get('lugar'));
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