<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 7 - Semáforo inteligente [Prática]
// Classe: Semaforo

// Propriedades:
//  public string $local
//  private string $cor
//  private int $ciclosCompletos

// Métodos e retornos:
//  avancar(): void - muda a cor na sequência vermelho -> verde -> amarelo -> vermelho.
//  podePassar(): bool - retorna true somente quando a cor for verde.
//  estado(): string - retorna local, cor atual e quantidade de ciclos completos.

// Regras:
//  O semáforo deve iniciar em vermelho.
//  A cor não pode ser alterada diretamente pelo código externo.
//  Considere um ciclo completo quando o semáforo retornar de amarelo para vermelho.
// Teste no ex7.php: execute pelo menos sete mudanças de cor e mostre o estado após cada avanço.

require_once '../vendor/autoload.php';

use App\Semaforo;
$S = new Semaforo("Avenida Azaléia", "vermelho", 0);


echo "\n================= 0 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 1 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 2 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 3 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 4 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 5 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 6 ================\n";
echo $S->estado();
echo "\n====================================\n";

echo "\n";

$S->avancar();
echo "\n================= 7 ================\n";
echo $S->estado();
echo "\n====================================\n";

?>