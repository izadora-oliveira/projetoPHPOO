<?php

abstract class Estante
{
    public $tipo;
    
    //métodos
    abstract public function adicionar();
    abstract public function excluir();
    abstract public function editar();
    
    public function vertodos()
    {
        return ;
    }
    public function ordenar(){
        return;
    }
    public function consultar(){
        return;
    }
}