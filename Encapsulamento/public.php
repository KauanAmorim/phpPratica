<?php

require_once "public_class.php";

$pessoa = new pessoa;

/** 
 * criando valores inconsistentes e 
 * denifinindo atributos em tempo de execução
*/
$pessoa->idade = 10;
$pessoa->nome = 'Ruan';
$pessoa->nascimento = '10 de outubro de 2008';
$pessoa->telefone = '(11) 1234-5678';