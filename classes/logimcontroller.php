<?php

require "logim.php";
require "cadastroservice.php";
require "conexao.php";

$logim = new logim();
$logim->__set('email', $_POST['email']);
$logim->__set('senha', $_POST['senha']);

$conexao = new Conexao();

$cadastroService = new LogimService($logim, $conexao);
$cadastroService->recuperar();