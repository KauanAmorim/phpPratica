<?php

abstract class Conta {

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){

        $this->agencia = $agencia;
        $this->conta = $conta;

        if($saldo >= 0){
            $this->saldo = $saldo;
        }

    }

    /**
     * This method returns the account information (English).
     * Esse método retorna as informações da conta (Portuguese).
     * @access public
     * @return String
     */
    public function getInfo(){
        return "Agencia: " . $this->agencia . ", Conta: " . $this->conta;
    }

    /**
     * This method increases the $saldo (English).
     * Esse incrementa o $saldo (Portuguese).
     * @access public
     * @param Number $quantia;
     * @return Void
     */
    public function depositar($quantia){
        if($quantia > 0){
            $this->saldo += $quantia;
        }
    }

    /**
     * This method return the $saldo (English).
     * Esse método retorna o $saldo (Portuguese).
     * @access public
     * @return Number
     */
    public function getSaldo(){
        return $this->saldo;
    }

    abstract function retirar($quantia);
    
}