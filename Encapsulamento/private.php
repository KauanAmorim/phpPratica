<?php

require_once "private_class.php";


/** 
 * tentand criar valores inconsistentes e 
 * denifinindo atributos em tempo de execução,
 * porém essa ação ocasionará em um erro já que
 * os atributos são privados.
 */

// $pessoa = new Pessoa;
// $pessoa->nome = "Luana";
// $pessoa->idade = 15;
// $pessoa->nascimento = "11 de novembro de 2003";

$pessoa = new Pessoa("Luana", 15);

if($pessoa->setNascimento("11 de novembro de 2003")){
    echo "Atribuido o valor 11 de novembro de 2003 <br>\n";
} else {
    echo "valor 11 de novembro de 2003 não atribuido <br>\n";
}

if($pessoa->setNascimento("11-11-2003")){
    echo "Atribuido o valor 11-11-2003 <br>\n";
} else {
    echo "valor 11-11-2003 não atribuido <br>\n";
}
