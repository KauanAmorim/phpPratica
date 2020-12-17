<?php

require_once "Contantes_classe.php";

$p1 = new Pessoa('Adilson', 'M');
$p2 = new Pessoa('Abigail', 'F');

var_dump($p1->getNome());
var_dump($p1->getNomeGenero());

echo "<hr>";

var_dump($p2->getNome());
var_dump($p2->getNomeGenero());

