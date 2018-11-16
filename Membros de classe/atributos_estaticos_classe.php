<?php

class Software {

    private $id;
    private $nome;
    public static $contador;

    public function __construct($nome){
        self::$contador++;
        
        $this->id = self::$contador;
        $this->nome = $nome;

        echo "ID: {$this->id} Nome: {$this->nome}<br>\n";
    }

    public static function getContador(){
        return self::$contador;
    }



}