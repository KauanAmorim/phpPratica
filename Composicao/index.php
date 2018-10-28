<?php 

require_once "produto.php";

echo "Olá aqui está um exemplo de composição de objetos em PHP OO";

for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

$celular = new Produto("J5 Pro", 1300, 500);

$celular->addCaracteristica("cor", "preto");
$celular->addCaracteristica("tela", "5.2");
$celular->addCaracteristica("resistencia", "quedas");
$celular->addCaracteristica("velocidade", "média");
$celular->addCaracteristica("custo_beneficio", "bom");

echo "Caracteristicas";

for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

foreach ($celular->getCaracteristicas() as $key => $carateristica) {
    echo $carateristica->getNome() . " - " . $carateristica->getValor() . "<hr>";
}

for ($i=0; $i < 1; $i++) { 
    echo "<br>";
}

echo "cor: " . $celular->getCaracteristicaEspecifica("cor");
echo "<hr>";
echo "tela: " . $celular->getCaracteristicaEspecifica("tela");
echo "<hr>";
echo "resistencia: " . $celular->getCaracteristicaEspecifica("resistencia");
echo "<hr>";
echo "Velocidade: " . $celular->getCaracteristicaEspecifica("velocidade");
echo "<hr>";
echo "custo_beneficio: " . $celular->getCaracteristicaEspecifica("custo_beneficio");
