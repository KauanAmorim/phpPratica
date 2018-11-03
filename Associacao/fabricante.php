<?php 

class Fabricante {

    private $nome;
    private $tempoDeAtuacao;
    private $nacionalidade;
    private $area;

    public function __construct($nome, $tempoDeAtuacao, $nacionalidade, $area){
        $this->nome = $nome;
        $this->tempoDeAtuacao = $tempoDeAtuacao;
        $this->nacionalidade = $nacionalidade;
        $this->area = $area;
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
     * This method get the $tempoDeAtuacao (English).
     * Esse método pega o $tempoDeAtuacao (Portuguese).
     * @access public
     * @return String
     */
    public function getTempoDeAtuacao(){
        return $this->tempoDeAtuacao;
    }

    /**
     * This method get the $nacionalidade (English).
     * Esse método pega a $nacionalidade (Portuguese).
     * @access public
     * @return String
     */
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    /**
     * This method get the $area (English).
     * Esse método pega a $area (Portuguese).
     * @access public
     * @return String
     */
    public function getArea(){
        return $this->area;
    }
    
}