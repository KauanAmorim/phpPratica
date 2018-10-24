<?php 

class fabricante {

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

    public function getNome(){
        return $this->nome;
    }

    public function getTempoDeAtuacao(){
        return $this->tempoDeAtuacao;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getArea(){
        return $this->area;
    }
    
}