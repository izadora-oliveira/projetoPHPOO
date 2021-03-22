<?php

class SeriesService
{
	public $conexao;
	public $series;

	public function __construct($conexao, $series)
	{
		$this->conexao = $conexao->conectar();
		$this->series = $series;
	}

function adicionar()
  {
        $query = 'INSERT INTO series(imagem, nome, temporada, lancamento)VALUES(:imagem, :nome, :temporada, :lancamento)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':imagem', $this->series->__get('imagem'));
		$stmt->bindValue(':nome', $this->series->__get('nome'));
        $stmt->bindValue(':temporada', $this->series->__get('temporada'));
        $stmt->bindValue(':lancamento', $this->series->__get('lancamento'));
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