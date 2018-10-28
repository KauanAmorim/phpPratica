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

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getValidade(){
        return $this->validade;
    }

    public function getFabricanteNome(){
        return $this->fabricante->getNome();
    }

    public function getFabricanteTempoDeAtuacao(){
        return $this->fabricante->getTempoDeAtuacao();
    }

    public function getFabricanteNacionalidade(){
        return $this->fabricante->getNacionalidade();
    }

    public function getFabricanteArea(){
        return $this->fabricante->getArea();
    }

}