<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 12 - Hidrômetro residencial [Preparação para prova]
// Classe: Hidrometro

// Propriedades:
// - public string $identificacao
// - private float $leituraAnterior
// - private float $leituraAtual

// Métodos e retornos:
// - registrarLeitura(float $novaLeitura): bool - aceita apenas leituras maiores ou iguais à atual.
// - consumoUltimoPeriodo(): float - retorna leituraAtual - leituraAnterior.
// - estimarConta(float $precoPorM3): float - retorna consumo * preço por m³.
// - resumo(): string - retorna leituras e consumo.

// Regras:
// - Ao registrar nova leitura, a leitura atual passa a ser a anterior e a nova leitura passa a ser a atual.
// - Leituras e preço por m³ não podem ser negativos.
// - Uma leitura menor que a atual deve ser recusada sem alterar o histórico.
// Teste no ex12.php: registre três leituras sucessivas e uma leitura inválida, verificando o consumo em cada período

require_once '../vendor/autoload.php';

use App\Hidrometro;

$HD = new Hidrometro('Hidrometro 1', 100, 120);

//Leituras válidas
echo "----------------- 1 -----------------" . PHP_EOL;
$HD->registrarLeitura(120);
echo $HD->resumo() . PHP_EOL;

echo "----------------- 2 -----------------" . PHP_EOL;

$HD->registrarLeitura(120);
echo $HD->resumo() . PHP_EOL;

echo "----------------- 3 -----------------" . PHP_EOL;

$HD->registrarLeitura(130);
echo $HD->resumo() . PHP_EOL;

echo "----------------- X -----------------" . PHP_EOL;

$HD->registrarLeitura(10);
echo $HD->resumo() . PHP_EOL;


?>