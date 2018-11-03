<?php 

class Caracteristica {
    
    private $nome;
    private $valor;

    public function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * This method get the $nome (English).
     * Esse método pega o $nome (Portuguese).
     * @access public
     * @return String
     */    
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the $valor (English).
     * Esse método pega o $valor (portuguese).
     * @access public
     * @return String
     */
    public function getValor(){
        return $this->valor;
    }

}