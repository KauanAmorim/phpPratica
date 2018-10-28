<?php

require_once "cesta.php";
require_once "../Composicao/produto.php";

$cesta = new Cesta();

$notebook = new Produto("Notebook", 2000, 50);
$chromecast = new Produto("Chromecast", 500, 30);
$televisao = new Produto("Televisao", 1800, 60);

$cesta->addItem($notebook);
$cesta->addItem($chromecast);
$cesta->addItem($televisao);

echo "Olá aqui está uma demonstração prática de agregação em PHP OO <hr>";

foreach($cesta->getItens() as $item){
    echo "Item: " . $item->getNome() . "<br>\n";
}
