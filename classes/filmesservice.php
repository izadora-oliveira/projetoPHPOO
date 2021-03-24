<?php
require_once('login.php');

class FilmesService
{
	public $conexao;
	public $filmes;

	public function __construct($conexao, $filmes)
	{
		$this->conexao = $conexao->conectar();
		$this->filmes = $filmes;
	}

function adicionar()
  {
    $query = 'INSERT INTO filmes(idestrangeira, imagem, nome, lancamento, genero, lugar)VALUES(:idusuario, :imagem, :nome, :lancamento, :genero, :lugar)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':idusuario', $_SESSION['idusuario']);
		$stmt->bindValue(':imagem', $this->filmes->__get('imagem'));
		$stmt->bindValue(':nome', $this->filmes->__get('nome'));
    $stmt->bindValue(':lancamento', $this->filmes->__get('lancamento'));
    $stmt->bindValue(':genero', $this->filmes->__get('genero'));
		$stmt->bindValue(':lugar', $this->filmes->__get('lugar'));
		$stmt->execute();
  }

  function recuperar()
  {
    $query = "SELECT imagem, nome, lancamento, genero, lugar FROM filmes WHERE idestrangeira = $_SESSION[idusuario]";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);

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