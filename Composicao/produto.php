<?php

require_once "caracteristica.php";

class Produto {
    
    private $nome;
    private $preco;
    private $estoque;
    private $caracteristica;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    /**
     * This method adds an characteristic ($caracteristica) (English).
     * Esse método adiciona uma $caracteristica (Portuguese).
     * @access public
     * @param String $nome;
     * @param String|Integer $valor;
     * @return Void
     */
    public function addCaracteristica($nome, $valor){
        $this->caracteristica[$nome] = new Caracteristica($nome, $valor);
    }

    /**
     * This method get all the set characteristics ($caracteristica) (English).
     * Esse método pega todas as $caracteristicas setadas (Portuguese).
     * @access public
     * @return Array
     */
    public function getCaracteristicas(){
        return $this->caracteristica;
    }

    /**
     * This method get a specific characteristic ($caracteristica) (English).
     * Esse método pega uma $caracteristica especifica (Portuguese).
     * @access public
     * @param String $nome;
     * @return String
     */    
    public function getCaracteristicaEspecifica($nome){
        return $this->caracteristica[$nome]->getValor();
    }

    /**
     * This method get the $nome set (English).
     * Esse método pega o $nome setado (portuguese).
     * @access public
     * @return Array
     */    
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the $preco set (English).
     * Esse método pega o $preco setado (Portuguese).
     * @access public
     * @return Array
     */    
    public function getPreco(){
        return $this->preco;
    }

    /**
     * This method get the $estoque set (English).
     * Esse método pega o $estoque setado (Portuguese).
     * @access public
     * @return Array
     */    
    public function getEstoque(){
        return $this->estoque;
    }
}