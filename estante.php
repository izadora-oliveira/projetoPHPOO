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
    function meta()
    {
        if ($this->progresso = $this->meta) {
        echo "livros lidos este mes: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "você bateu sua meta mensal, parabéns!";
        } else {
        echo "livros lidos este mes: ",$this->progresso;
        echo "meta estipulada: ",$this->meta;
        echo "ainda falta, continue lendo!";
        }
    }
}