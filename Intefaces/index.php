<?php

require_once "OrcavelInterface.php";
require_once "Orcamento.php";
require_once "Produto.php";
require_once "Servico.php";

$orcamento = new Orcamento;

$orcamento->adiciona(new Produto('Chocolate', 10, 3), 1);
$orcamento->adiciona(new Produto('Café', 50, 7), 2);
$orcamento->adiciona(new Produto('Pipoca', 100, 5), 4);

$orcamento->adiciona(new Servico('Cloud', 50), 1);
$orcamento->adiciona(new Servico('Rede social', 10), 2);
$orcamento->adiciona(new Servico('Streaming', 20), 3);


echo "Total: " . $orcamento->calculaTotal();