<?php

 class Pessoa {

    /**
     * Se for private irá gerar um erro pois private 
     * só pode ser usada na classe em que ela pertence.
    */
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
 }