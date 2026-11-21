<?php

$nome = "Hora do QA";

echo "<h1>Olá, $nome!</h1>";
echo "<p>Seu ambiente PHP está funcionando!</p>";

echo "Aprendendo PHP com exemplos simples.". "<br>";
echo "" . "<br>";

echo "Aprendendo a imprimir uma String:". "<br>";
echo "Olá, mundo!". "<br>";
echo "" . "<br>";

echo "Aprendendo sobre variáveis:". "<br>";

$nome = "João";
$idade = 25;
$altura = 1.75;
$ativo = true;

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura. "<br>";
echo "Status: " . ($ativo ? "Ativo" : "Inativo") . "<br>";

echo "" . "<br>";

echo "Aprendendo sobre operadores:". "<br>";
$a = 10;
$b = 5;

echo "A = 10 e B = 5" . "<br>";
echo "" . "<br>";
echo "Soma de A e B: " . ($a + $b) . "<br>";
echo "" . "<br>";
echo "Subtração de A e B: " . ($a - $b) . "<br>";
echo "" . "<br>";
echo "Multiplicação de A e B: " . ($a * $b) . "<br>";
echo "" . "<br>";
echo "Divisão de A e B: " . ($a / $b) . "<br>";
echo "" . "<br>";

echo "Aprendendo sobre estruturas de controle:". "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i <br>";
}

