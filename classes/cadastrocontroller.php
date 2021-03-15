<?php

require "../../projetoPHPOO\classes\cadastro.php";
require "../../projetoPHPOO\classes\cadastroservice.php";
require "../../projetoPHPOO\classes\conexao.php";


$cadastro = new Cadastro();
$cadastro->__set('nome', $_POST['nome']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();
//echo "<script>location.href='../nova_tarefa.php?inclusao=1';</script>";
header('Location:../nova_tarefa.php?inclusao=1');
/*
echo '<pre>';
print_r($tarefaService);
echo '</pre>';
*/