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
     * This method get the nome.
     * @access public
     * @return String
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * This method get the tempoDeAtuacao.
     * @access public
     * @return String
     */
    public function getTempoDeAtuacao(){
        return $this->tempoDeAtuacao;
    }

    /**
     * This method get the nacionalidade.
     * @access public
     * @return String
     */
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    /**
     * This method get the Area.
     * @access public
     * @return String
     */
    public function getArea(){
        return $this->area;
    }
    
}