<?php

require "conexao.php";
require "login.php";
require "filmes.php";
require "filmesservice.php";

$filmes = new Filmes();
$filmes->__set('imagem', $_POST['imagem']);
$filmes->__set('nome', $_POST['nome']);
$filmes->__set('lancamento', $_POST['lancamento']);
$filmes->__set('genero', $_POST['genero']);
$filmes->__set('lugar', $_POST['lugar']);

$idusuario = new login();
$idusuario->getIdUsuario();


$conexao = new Conexao();


$filmesService = new FilmesService($conexao, $filmes, $idusuario);
$filmesService->adicionar();


header('Location:../filmes.php?inclusao=1');