<?php 

/** 
 * -> Inglês (English)
 * Calling class file.
 * 
 * -> Português (Portuguese)
 * Chamando arquivo de classe.
*/
require_once "produto.php";

echo "Olá aqui está um exemplo de composição de objetos em PHP OO <br>";
echo "Hello, here is an example of object composition in PHP OO";

for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

/** 
 * -> Inglês (English)
 * Class instance.
 * 
 * -> Português (Portuguese)
 * Instancia de classe.
*/
$celular = new Produto("J5 Pro", 1300, 500);

/** 
 * -> Inglês (English)
 * Executing addCaracteristica method to add characteristics to the product.
 * 
 * -> Português (Portuguese)
 * Executando método addCaracteristica para adicionar caracteristicas ao produto.
*/
$celular->addCaracteristica("cor", "preto");
$celular->addCaracteristica("tela", "5.2");
$celular->addCaracteristica("resistencia", "quedas");
$celular->addCaracteristica("velocidade", "média");
$celular->addCaracteristica("custo_beneficio", "bom");

for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

/** 
 * -> Inglês (English)
 * Executing getCaracteristicas method to get all the added characteristics.
 * Executing method getNome to get the name of the character.
 * Executing method getValor to get the value of the characteristic.
 * 
 * -> Português (Portuguese)
 * Executando método getCaracteristicas para pegar todas as caracteristicas adicionadas.
 * Executando método getNome para pegar o nome da caracterisca.
 * Executando método getValor para pegar o valor da caracteristica.
*/
foreach ($celular->getCaracteristicas() as $key => $carateristica) {
    echo $carateristica->getNome() . " - " . $carateristica->getValor() . "<hr>";
}

for ($i=0; $i < 1; $i++) { 
    echo "<br>";
}

/** 
 * -> Inglês (English)
 * Executing getCaracteristicaSpecific method to get the value 
 * of a specific characteristic by the proper name.
 * 
 * -> Português (Portuguese)
 * Executando método getCaracteristicaEspecifica para pegar o valor 
 * de uma caracteristica específica pelo nome prórpio.
*/
echo "cor: " . $celular->getCaracteristicaEspecifica("cor");
echo "<hr>";
echo "tela: " . $celular->getCaracteristicaEspecifica("tela");
echo "<hr>";
echo "resistencia: " . $celular->getCaracteristicaEspecifica("resistencia");
echo "<hr>";
echo "Velocidade: " . $celular->getCaracteristicaEspecifica("velocidade");
echo "<hr>";
echo "custo_beneficio: " . $celular->getCaracteristicaEspecifica("custo_beneficio");
