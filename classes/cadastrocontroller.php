<?php

require "cadastro.php";
require "cadastroservice.php";
require "conexao.php";

$n = $_POST['nome'];
$e = $_POST['email'];
$s = $_POST['senha'];

$cadastro = new Cadastro();
$cadastro->__set('nome', $n);
$cadastro->__set('email', $e);
$cadastro->__set('senha', $s);

$conexao = new Conexao();

$cadastroService = new CadastroService($conexao, $n, $e, $s);
$cadastroService->inserir();

header('Location:../cadastrar.php?inclusao=1');