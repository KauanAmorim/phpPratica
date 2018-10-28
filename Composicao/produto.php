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
     * This method adds an characteristic.
     * @access public
     * @param String $nome;
     * @param String|Integer $valor;
     * @return Void
     */
    public function addCaracteristica($nome, $valor){
        $this->caracteristica[$nome] = new Caracteristica($nome, $valor);
    }

    /**
     * This method get all the set characteristics.
     * @access public
     * @return Array
     */
    public function getCaracteristicas(){
        return $this->caracteristica;
    }

    /**
     * This method get a specific characteristic.
     * @access public
     * @param String $nome;
     * @return String
     */    
    public function getCaracteristicaEspecifica($nome){
        return $this->caracteristica[$nome]->getValor();
    }

    /**
     * This method get the name set.
     * @access public
     * @return Array
     */    
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the preco set.
     * @access public
     * @return Array
     */    
    public function getPreco(){
        return $this->preco;
    }

    /**
     * This method get the estoque set.
     * @access public
     * @return Array
     */    
    public function getEstoque(){
        return $this->estoque;
    }
}