<?php

abstract class Estante
{
    public $tipo;
    public $meta;
    public $progresso = 0;
    
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
    function metadomes()
    {
        if ($this->progresso = $this->meta) {
        echo "quantidade atual: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "você bateu sua meta mensal, parabéns!";
        } else {
        echo "quantidade atual: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "ainda falta";
        }
    }
}