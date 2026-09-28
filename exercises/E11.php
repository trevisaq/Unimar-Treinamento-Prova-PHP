<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 11 - Cartão de transporte urbano [Preparação para prova]
// Classe: CartaoTransporte

// Propriedades:
// - public string $titular
// - private float $saldo
// - private float $tarifa
// - private int $viagensRealizadas

// Métodos e retornos:
// - recarregar(float $valor): bool - adiciona crédito positivo.
// - embarcar(): bool - desconta uma tarifa se houver saldo suficiente.
// - saldoAtual(): float - retorna o saldo.
// - viagensRealizadas(): int - retorna a quantidade de embarques confirmados.
// - resumo(): string - retorna os dados relevantes.

// Regras:
// - O cartão inicia com zero viagens.
// - A tarifa deve ser positiva.
// - Embarques sem saldo suficiente devem falhar sem alterar o estado.
// Teste no ex11.php: recarregue o cartão, faça vários embarques até o saldo se tornar insuficiente e confirme o total 

require_once '../vendor/autoload.php';

use App\CartaoTransporte;

$CARTAO = new CartaoTransporte('Edivaldo', 0, 20);
$CARTAO->recarregar(150);

for ($i = 0; $i <= 7; $i++) {
    $CARTAO->embarcar();
}

echo "\n" . $CARTAO->resumo();

?>