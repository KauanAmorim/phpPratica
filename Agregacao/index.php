<?php

/** 
 * -> Inglês (English)
 * Calling class files.
 * 
 * -> Português (Portuguese)
 * Chamando arquivos de classes.
*/
require_once "cesta.php";
require_once "../Composicao/produto.php";

/** 
 * -> Inglês (English)
 * Class instances.
 * 
 * -> Português (Portuguese)
 * Instancias de classes.
*/
$cesta = new Cesta();

$notebook = new Produto("Notebook", 2000, 50);
$chromecast = new Produto("Chromecast", 500, 30);
$televisao = new Produto("Televisao", 1800, 60);

/** 
 * -> Inglês (English)
 * Executing methods to add items to the basket(cesta) class.
 * 
 * -> Português (Portuguese)
 * Executando métodos para adicionar itens na classe cesta. 
*/
$cesta->addItem($notebook);
$cesta->addItem($chromecast);
$cesta->addItem($televisao);

echo "Olá aqui está uma demonstração prática de agregação em PHP OO <br>";
echo "Hello here is a practical demonstration of aggregation in PHP OO <hr>";

/** 
 * -> Inglês (English)
 * Executing getItens() method to get all added items and
 * getNome method to get the name of the item.
 * 
 * -> Português (Portuguese)
 * Executando método getIntes() para pegar todos os itens adicionados e 
 * método getNome para pegar o nome do item. 
*/
foreach($cesta->getItens() as $item){
    echo "Item: " . $item->getNome() . "<br>\n";
}
