<?php 

require_once 'singleton_referencias.php';

$p1 = Preferencias::getInstance();
echo 'A linguagem é: ' . $p1->getData('language') . "<br>\n";
$p1->setData('language', 'pt');
echo 'A linguagem é: ' . $p1->getData('language') . "<br>\n";


$p2 = Preferencias::getInstance();
echo 'A linguagem é: ' . $p2->getData('language') . "<br>\n";

$p1->save();