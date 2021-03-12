<?php

abstract class Estante
{
    public $tipo;
    
    //métodos
    public function vertodos()
    {
        return ;
    }
    public function ordenar(){
        return;
    }
    abstract public function adicionar();
    public function consultar(){
        return;
    }
    abstract public function excluir();
    abstract public function editar();
}