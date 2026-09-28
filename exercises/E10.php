<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 10 - Cofrinho digital com meta [Prática]
// Classe: CofrinhoMeta

// Propriedades:
// - public string $objetivo
// - private float $saldo
// - private float $meta

// Métodos e retornos:
// - depositar(float $valor): bool - adiciona valores positivos.
// - retirar(float $valor): bool - retira somente quando houver saldo suficiente.
// - percentualDaMeta(): float - retorna o percentual já alcançado.
// - metaAtingida(): bool - retorna true quando saldo >= meta.
// - resumo(): string - retorna objetivo, saldo, meta e progresso.

// Regras:
// - A meta deve ser maior que zero.
// - saldo nunca pode ficar negativo.
// - O percentual pode ultrapassar 100% caso o saldo supere a meta.
// Teste no ex10.php: faça depósitos e retiradas válidas e inválidas até atingir a meta.

require_once '../vendor/autoload.php';

use App\CofrinhoMeta;

$META = new CofrinhoMeta('Celular novo', 100, 2600);

$META->depositar(345); // 445
$META->retirar(200); // 245
$META->depositar(35); // 280
$META->retirar(10000000000); // Erro de saldo
echo "\n";

echo $META->resumo();  


?>