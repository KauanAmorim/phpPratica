<?php 

class Caracteristica {
    private $nome;
    private $valor;

    public function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * This method get the nome.
     * @access public
     * @return String
     */    
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the valor.
     * @access public
     * @return String
     */
    public function getValor(){
        return $this->valor;
    }

}