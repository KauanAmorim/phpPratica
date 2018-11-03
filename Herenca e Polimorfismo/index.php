<?php

/** 
 * -> Inglês (English)
 * Calling class file.
 * 
 * -> Português (Portuguese)
 * Chamando arquivo de classe.
*/
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

echo "Olá, aqui está um exemplo prático de heranca de objetos e polimorfismo. <br>";
echo "Hello, here is a practical example of object inheritance and polymorphism";

for ($i=0; $i < 2; $i++) { 
    if($i == 1){
        echo "<hr>";
    }else {
        echo "<br>";
    }
}

/** 
 * -> Inglês (English)
 * executing methods (polymorphism).
 * 
 * -> Português (Portuguese)
 * Executando métodos (Polimorfismo).
*/

$contas = array();

$contas[] = new ContaCorrente("xxxx", "yyyyyy", 100, 1500);
$contas[] = new ContaPoupanca("xxxx", "yyyyyy", 100);


$conta_number = 1;
foreach ($contas as $key => $conta) {

    if($conta_number != 1){
        echo "Conta Poupanca <br><br>";
    } else {
        echo "Conta Corrente <br><br>";
    }

    echo "Conta: " . $conta->getInfo() . "<br>";
    echo "Saldo atual: " . $conta->getSaldo() . "<br>";

    $conta->depositar(500);
    echo "Depósito de: " . 500 . "<br>";
    echo "Saldo atual de: " . $conta->getSaldo() . "<br>";

    if($conta->retirar(700)){
        echo "Retirada de: " . 700 . "<br>";
    } else {
        echo "Retirada de: " . 700 . " (Não permitida) " . "<br>";
    }

    echo "Saldo atual de: " . $conta->getSaldo() . "<hr>";

    $conta_number++;
}
