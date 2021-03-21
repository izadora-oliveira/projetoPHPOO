<?php
session_start();

require "login.php";
require "loginservice.php";
require "conexao.php";

$login = new Login();
$login->__set('email', $_POST['email']);
$login->__set('senha', $_POST['senha']);

$conexao = new Conexao();

$loginService = new LoginService($conexao, $login);
$result = $loginService->logar($login->__get('email'),$login->__get('senha'));
if (empty($result)) {
    echo 'logim e ou senha incorretos';
} else {
        $_SESSION['idusuario'] = $result['idusuario'];
        $_SESSION['nome'] = $result['nome'];
        $_SESSION['authenticated'] = 'YES';
    header('Location:../index.php?inclusao=1');
}