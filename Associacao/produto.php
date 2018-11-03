<?php

class Produto {
 
    private $nome;
    private $descricao;
    private $preco;
    private $validade;
    private $fabricante;

    public function __construct($nome, $descricao, $preco, $validade, $fabricante){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->validade = $validade;
        $this->fabricante = $fabricante;
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
     * This method get the $descricao (English).
     * Esse método pega a $descricao (Portuguese).
     * @access public
     * @return String
     */
    public function getDescricao(){
        return $this->descricao;
    }

    /**
     * This method get the $preco (English).
     * Esse método pega o $preco (Portuguese).
     * @access public
     * @return String|Integer
     */
    public function getPreco(){
        return $this->preco;
    }

    /**
     * This method get the $validade (English).
     * Esse método pega a $validade (Portuguese).
     * @access public
     * @return String
     */
    public function getValidade(){
        return $this->validade;
    }

    /**
     * This method get the $nome of $fabricante (English).
     * Esse método pega o $nome do $fabricante (Portuguese).
     * @access public
     * @return String
     */
    public function getFabricanteNome(){
        return $this->fabricante->getNome();
    }

    /**
     * This method get the $tempoDeAtuacao of $fabricante (English).
     * Esse método pega o $tempoDeAtuacao do $fabricante (Portuguese).
     * @access public
     * @return String
     */
    public function getFabricanteTempoDeAtuacao(){
        return $this->fabricante->getTempoDeAtuacao();
    }

    /**
     * This method get the $nacionalidade of $fabricante (English).
     * Esse método pega a $nacionalidade do $fabricante (Portuguese).
     * @access public
     * @return String
     */
    public function getFabricanteNacionalidade(){
        return $this->fabricante->getNacionalidade();
    }

    /**
     * This method get the $area of $fabricante (English).
     * Esse método pega a $area do $fabricante (Portuguese).
     * @access public
     * @return String
     */
    public function getFabricanteArea(){
        return $this->fabricante->getArea();
    }

}