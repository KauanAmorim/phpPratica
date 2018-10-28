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
     * This method get the nome.
     * @access public
     * @return String
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the descricao.
     * @access public
     * @return String
     */
    public function getDescricao(){
        return $this->descricao;
    }

    /**
     * This method adds an characteristic.
     * @access public
     * @return String|Integer
     */
    public function getPreco(){
        return $this->preco;
    }

    /**
     * This method get the validade.
     * @access public
     * @return String
     */
    public function getValidade(){
        return $this->validade;
    }

    /**
     * This method get the fabricante nome.
     * @access public
     * @return String
     */
    public function getFabricanteNome(){
        return $this->fabricante->getNome();
    }

    /**
     * This method get the fabricante tempoDeAtuacao.
     * @access public
     * @return String
     */
    public function getFabricanteTempoDeAtuacao(){
        return $this->fabricante->getTempoDeAtuacao();
    }

    /**
     * This method get the fabricante nacionalidade.
     * @access public
     * @return String
     */
    public function getFabricanteNacionalidade(){
        return $this->fabricante->getNacionalidade();
    }

    /**
     * This method get the fabricante area.
     * @access public
     * @return String
     */
    public function getFabricanteArea(){
        return $this->fabricante->getArea();
    }

}