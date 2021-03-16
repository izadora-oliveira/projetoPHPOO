<?php

require "../../projetoPHPOO\classes\cadastro.php";
require "../../projetoPHPOO\classes\cadastroservice.php";
require "../../projetoPHPOO\classes\conexao.php";


$cadastro = new Cadastro();
$cadastro->__set('nome', $_POST['nome']);
$cadastro->__set('email', $_POST['email']);
$cadastro->__set('senha', $_POST['senha']);

$conexao = new Conexao();

$cadastroService = new CadastroService($conexao, $nome, $email, $senha);
$cadastroService->inserir();

header('Location:../cadastrar.php?inclusao=1');