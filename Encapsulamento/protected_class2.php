<?php

require_once "protected_class1.php";

class Funcionario extends Pessoa {

    private $cargo;
    private $salario;

    public function __construct($nome)
    {
        parent::__construct($nome);
    }

    public function contrata($cargo, $salario)
    {
        if(is_numeric($salario) && $salario > 0){
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
    }

    public function getInfo()
    {
        return "Nome: {$this->nome} Saláraio: {$this->salario}";
    }
}