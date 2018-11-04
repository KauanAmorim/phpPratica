<?php

/**
 * -> Inglês (English)
 * Generating error with attempt to recreate a parent class's final method.
 * 
 * -> Portugues (Portuguese)
 * Gerando erro com tentativa de recriar um método final da classe pai.
 */

require_once "ContaCorrente.php";
class ContaCorrentEspecial extends ContaCorrente {

    public function retirar($quantia){
        $this->saldo -= $quantia;
    }

}