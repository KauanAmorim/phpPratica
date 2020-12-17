<?php

require_once "atributos_estaticos_classe.php";

$software = new Software('lib');
$software = new Software('api');
$software = new Software('class');
$software = new Software('interface');

echo "Quantidade criada: {$software::getContador()} <br>";