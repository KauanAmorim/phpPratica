<?php

require_once "caracteristica.php";

class produto {
    
    private $nome;
    private $preco;
    private $estoque;
    private $caracteristica;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function addCaracteristica($nome, $valor){
        $this->caracteristica[$nome] = new caracteristica($nome, $valor);
    }

    public function getCaracteristicas(){
        return $this->caracteristica;
    }

    public function getCaracteristicaEspecifica($nome){
        return $this->caracteristica[$nome]->getValor();
    }
}