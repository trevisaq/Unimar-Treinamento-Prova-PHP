<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 8 - Lâmpada inteligente   [Prática]
// Classe: LampadaInteligente

// Propriedades:
// public string $comodo
// private bool $ligada
// private int $intensidade

// Métodos e retornos:
// ligar(): void - liga a lâmpada.
// desligar(): void - desliga a lâmpada.
// ajustarIntensidade(int $valor): bool - aceita valores de 0 a 100.
// status(): string - retorna cômodo, estado e intensidade.

// Regras:
// A intensidade deve permanecer entre 0 e 100.
// A lâmpada inicia desligada e com intensidade 50.
// Uma tentativa de intensidade inválida não deve alterar o valor anterior.
// Teste no ex8.php: crie duas lâmpadas, altere intensidade, ligue/desligue e tente informar valores inválidos

require_once '../vendor/autoload.php';

use App\LampadaInteligente;
$L1 = new LampadaInteligente("Sala", true, 12);

?>