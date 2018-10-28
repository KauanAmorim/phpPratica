<?php
require_once "fabricante.php";
require_once "produto.php";

$fabricante = new Fabricante("DeveloperStudios", "20 Anos", "Filandesa", "I.T.");

echo "Nome do fabricante: " . $fabricante->getNome() . "<hr>";
echo "Tempo de atuação do fabricante: " . $fabricante->getTempoDeAtuacao() . "<hr>";
echo "Nacionalidade do fabricante: " . $fabricante->getNacionalidade() . "<hr>";
echo "Area de atuação do fabricante: " . $fabricante->getArea() . "<hr>";

for ($i=0; $i < 2; $i++) { 
    echo "<br>";
}

$descricao = "Api para ajudar a empresa X deixar mais pratica sua area de finanças";
$produto = new Produto("Api Financeira", $descricao, "3500", "Sem validade", $fabricante);

echo "Produto - Nome: " . $produto->getNome() . "<hr>";
echo "Produto - Descrição: " . $produto->getDescricao() . "<hr>";
echo "Produto - Preço:  " . $produto->getPreco() . "<hr>";
echo "Produto - Validade: " . $produto->getValidade() . "<hr>";
echo "Produto - Fabricante(Nome): " . $produto->getFabricanteNome() . "<hr>";
echo "Produto - Fabricante(Tempo de Atuação): " . $produto->getFabricanteTempoDeAtuacao() . "<hr>";
echo "Produto - Fabricante(Nacionalidade): " . $produto->getFabricanteNacionalidade() . "<hr>";
echo "Produto - Fabricante(Area): " . $produto->getFabricanteArea() . "<hr>";


echo "Olá, aqui está um exemplo prático do que é uma associanção em PHP OO";



