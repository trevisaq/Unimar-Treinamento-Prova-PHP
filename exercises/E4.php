<?php 

// Exercício 4 - Cronômetro de treino [Fixação]
// Classe: CronometroTreino
// Propriedades:
//  public string $atividade
//  private int $segundosAcumulados
// Métodos e retornos:
//  adicionarTempo(int $segundos): bool - soma apenas valores positivos.
//  zerar(): void - redefine o tempo acumulado para zero.
//  totalMinutos(): float - retorna o tempo em minutos.
//  formatarTempo(): string - retorna o total no formato HH:MM:SS.
// Regras:
//  O cronômetro deve iniciar em zero.
//  O tempo acumulado não pode ser alterado diretamente fora da classe.
// Teste no ex4.php: adicione tempos em três etapas, exiba o formato final, zere o cronômetro e confirme o novo
// estado.

require_once '../vendor/autoload.php';

use App\CronometroTreino;

$cronometro = new CronometroTreino("Correr igual o david Goggigns", 0);  

echo $cronometro->formatarTempo() . PHP_EOL;

$cronometro->adicionarTempo(10);
$cronometro->adicionarTempo(40);
$cronometro->adicionarTempo(600);


echo $cronometro->formatarTempo() . PHP_EOL;


?>