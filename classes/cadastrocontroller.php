<?php

require "cadastro.php";
require "cadastroservice.php";
require "conexao.php";

$cadastro = new Cadastro();
$cadastro->__set('nome', $_POST['nome']);
$cadastro->__set('email', $_POST['email']);
$cadastro->__set('senha', $_POST['senha']);

$conexao = new Conexao();

$cadastroService = new CadastroService($conexao, $cadastro);
$cadastroService->inserir();

header('Location:../cadastrar.php?inclusao=1');