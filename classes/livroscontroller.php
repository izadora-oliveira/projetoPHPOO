<?php

require "conexao.php";
require "livros.php";
require "livrosservice.php";


$livros = new Livros();
$livros->__set('imagem', $_POST['imagem']);
$livros->__set('nome', $_POST['nome']);
$livros->__set('autor', $_POST['autor']);
$livros->__set('lancamento', $_POST['lancamento']);
$livros->__set('nota', $_POST['nota']);

$conexao = new Conexao();


$livrosService = new LivrosService($conexao, $livros);
$livrosService->adicionar();


header('Location:../livros.php?inclusao=1');

