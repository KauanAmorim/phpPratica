<?php

require_once "protected_class2.php";

$pessoa = new Funcionario("Joana");
$pessoa->contrata("Analista", 1700);

echo $pessoa->getInfo();