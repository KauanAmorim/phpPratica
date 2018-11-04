<?php

require_once "Conta.php";

final class ContaPoupanca extends Conta {

    /**
     * This method decreases the $saldo (English).
     * Esse método decrementa a $saldo (Portuguese).
     * @access public
     * @param Number $quantia;
     * @return Boolean
     */
    public function retirar($quantia){

        if($this->saldo >= $quantia){     
            $this->saldo -= $quantia;
        } else {
            return false;
        }
        
        return true;

    }

}