<?php

/** 
 * -> Inglês (English)
 * Calling class files.
 * 
 * -> Português (Portuguese)
 * Chamando arquivos de classes.
*/
require_once "fabricante.php";
require_once "produto.php";

echo "Olá, aqui está um exemplo prático do que é uma associanção em PHP OO <br>";
echo "Olá, aqui está um exemplo prático do que é uma associanção em PHP OO <br>";

/** 
 * -> Inglês (English)
 * Class instance to use as association.
 * 
 * -> Português (Portuguese)
 * Instancia de classe para usar como associação.
*/
$fabricante = new Fabricante("DeveloperStudios", "20 Anos", "Filandesa", "I.T.");

/** 
 * -> Inglês (English)
 * Running get methods to test class operation.
 * 
 * -> Português (Portuguese)
 * Executando métodos get para testar funcionamento de classe.
*/
echo "Nome do fabricante: " . $fabricante->getNome() . "<hr>";
echo "Tempo de atuação do fabricante: " . $fabricante->getTempoDeAtuacao() . "<hr>";
echo "Nacionalidade do fabricante: " . $fabricante->getNacionalidade() . "<hr>";
echo "Area de atuação do fabricante: " . $fabricante->getArea() . "<hr>";

/** 
 * -> Inglês (English)
 * Skipping Lines.
 * 
 * -> Português (Portuguese)
 * Pulando linhas.
*/
for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

/** 
 * -> Inglês (English)
 * Instance class using the class instantiated above for association.
 * 
 * -> Português (Portuguese)
 * Instancia de classe usando a classe instanciada acima para associação.
*/
$descricao = "Api para ajudar a empresa X deixar mais pratica sua area de finanças";
$produto = new Produto("Api Financeira", $descricao, "3500", "Sem validade", $fabricante);

/** 
 * -> Inglês (English)
 * Using get methods to test class operation and methods with getFabricante...
 * is a method using the object relationship called association.
 * 
 * -> Português (Portuguese)
 * Usando métodos get para testar funcionamento da classe e métodos com a nomeclatura getFabricante... 
 * é um método usando o relacionamento de objeto chamado associação.
*/
echo "Produto - Nome: " . $produto->getNome() . "<hr>";
echo "Produto - Descrição: " . $produto->getDescricao() . "<hr>";
echo "Produto - Preço:  " . $produto->getPreco() . "<hr>";
echo "Produto - Validade: " . $produto->getValidade() . "<hr>";
echo "Produto - Fabricante(Nome): " . $produto->getFabricanteNome() . "<hr>";
echo "Produto - Fabricante(Tempo de Atuação): " . $produto->getFabricanteTempoDeAtuacao() . "<hr>";
echo "Produto - Fabricante(Nacionalidade): " . $produto->getFabricanteNacionalidade() . "<hr>";
echo "Produto - Fabricante(Area): " . $produto->getFabricanteArea() . "<hr>";



