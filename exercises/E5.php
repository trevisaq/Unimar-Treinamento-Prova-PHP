<?php 

// Exercício 5 - Triângulo e suas regras   [Fixação]

// Classe: Triangulo
// Propriedades:
// private float $ladoA
// private float $ladoB
// private float $ladoC

// Métodos e retornos:
// ehValido(): bool - verifica a desigualdade triangular.
// classificar(): string - retorna Equilátero, Isósceles, Escaleno ou Inválido.
// perimetro(): float - retorna a soma dos lados quando o triângulo for válido.

// Regras:
// Todos os lados devem ser maiores que zero.
// Um lado deve ser menor que a soma dos outros dois para existir um triângulo.
// Evite permitir alteração direta dos lados após a criação do objeto.
// Teste no ex5.php: teste ao menos um triângulo equilátero, um escaleno e um conjunto de lados que não forme 
// triângulo.

require_once '../vendor/autoload.php';

use App\Triangulo;

$T1 = new Triangulo(45, 20, 20);  
echo $T1-> Classificar() . PHP_EOL;

?>