<?php
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
}