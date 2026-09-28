<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 13 - Máquina de snacks [Preparação para prova]
// Classe: MaquinaSnack

// Propriedades:
// - public string $produto
// - private float $preco
// - private int $estoque
// - private float $credito

// Métodos e retornos:
// - reabastecer(int $quantidade): bool - aumenta o estoque com quantidade positiva.
// - inserirCredito(float $valor): bool - aumenta o crédito com valor positivo.
// - comprar(): bool - realiza a compra somente com estoque e crédito suficientes.
// - devolverCredito(): float - retorna o crédito existente e zera o crédito da máquina.
// - status(): string - informa produto, preço, estoque e crédito.

// Regras:
// - O estoque inicia em 0 e o crédito em 0.
// - Uma compra válida reduz o estoque em 1 e o crédito pelo preço do produto.
// - Compra inválida não pode alterar estoque nem crédito.
// - O crédito restante pode permanecer para uma próxima compra ou ser devolvido.
// Teste no ex13.php: teste falta de estoque, crédito insuficiente, compra bem-sucedida, compra com crédito excedente
// e devolução

require_once '../vendor/autoload.php';

use App\MaquinaSnack;

$MQ = new MaquinaSnack('Doritos', 16.99);

echo "------------------ SEM SALDO ------------------" . PHP_EOL;
$MQ->comprar();
echo "-----------------------------------------------" . PHP_EOL;

echo "\n\n";

echo "----------------- SEM ESTOQUE -----------------" . PHP_EOL;
$MQ->inserirCredito(100);
$MQ->comprar();
echo "-----------------------------------------------" . PHP_EOL;

echo "\n\n";

echo "-------------- COMPRA COM SUCESSO -------------" . PHP_EOL;
$MQ->reabastecer(10);
$MQ->comprar();
$MQ->comprar();
echo "-----------------------------------------------" . PHP_EOL;

echo "\n\n";

echo "------------------ DEVOLUÇÃO ------------------" . PHP_EOL;
$MQ->devolverCredito();
echo "-----------------------------------------------" . PHP_EOL;

?>