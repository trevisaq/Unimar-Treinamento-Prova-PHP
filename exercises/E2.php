<?php 

// Exercício 2 - Temperatura controlada [Fixação]

// Classe: Temperatura
// Propriedades:
//  private float $celsius
// Métodos e retornos:
//  alterar(float $novoValor): bool - altera a temperatura se o valor for válido.
//  emFahrenheit(): float - retorna (celsius * 9 / 5) + 32.
//  emKelvin(): float - retorna celsius + 273.15.
//  descricao(): string - retorna uma descrição com as três escalas.
// Regras:
//  Não aceite valores inferiores a -273.15 °C.
//  A propriedade celsius não pode ser modificada diretamente fora da classe.
// Teste no ex2.php: teste uma temperatura comum, uma negativa e uma tentativa de alteração abaixo do zero
// absoluto.

require_once '../vendor/autoload.php';

use App\Temperatura;

$T1 = new Temperatura(38);
echo $T1->descricao();

echo "\n\n";

$T1->alterar(150);
echo $T1->descricao();

// =================== teste com erro ===================
echo "\n\n";
$T1->alterar(-350);



?>