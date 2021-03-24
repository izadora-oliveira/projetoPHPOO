<?php
session_start();

class Login
{
  //atributos
  public $email;
  public $senha;

  public function __get($atributo) {
    return $this->$atributo;
  }
  
  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  } 

  function verificalogin(){
    if (!isset($_SESSION ['authenticated'] ) ) 
    {
      echo ("<script>
      window.alert('você não esta logado!')
      window.location.href='entra.php?login=erro2';
      </script>");
    }
  }

  function deslogar(){
    session_destroy();
    header('Location:../entra.php?inclusao=1');
  }
  
}