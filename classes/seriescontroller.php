<?php

require "conexao.php";
require "series.php";
require "seriesservice.php";


$series = new Series();
$series->__set('imagem', $_POST['imagem']);
$series->__set('nome', $_POST['nome']);
$series->__set('temporada', $_POST['temporada']);
$series->__set('lancamento', $_POST['lancamento']);

$conexao = new Conexao();


$seriesService = new SeriesService($conexao, $series);
$seriesService->adicionar();


header('Location:../series.php?inclusao=1');

