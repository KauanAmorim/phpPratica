<?php

require_once "Conta.php";

class ContaCorrente extends Conta {

    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    /**
     * This method decreases the $saldo (English).
     * Esse método decrementa a $saldo (Portuguese).
     * @access public
     * @param Number $quantia;
     * @return Boolean
     */
    final public function retirar($quantia){

        if($this->saldo + $this->limite >= $quantia){
            $this->saldo -= $quantia;
        } else {
            return false;
        }
        
        return true;

    }

}