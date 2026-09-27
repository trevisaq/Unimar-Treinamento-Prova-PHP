<?php 

// Exercício 6 - Ticket de estacionamento [Prática]
// Classe: TicketEstacionamento

// Propriedades:
//  public string $placa
//  private int $entradaMin
//  private ?int $saidaMin
//  private float $tarifaHora

// Métodos e retornos:
//  registrarSaida(int $minuto): bool - registra a saída somente se for posterior à entrada.
//  duracaoMin(): int - retorna a duração; antes da saída, pode retornar 0.
//  valorAPagar(): float - cobra a tarifa por hora, arredondando qualquer fração para a próxima hora completa.
//  resumo(): string - retorna placa, duração e valor.

// Regras:
//  Considere entrada e saída como minutos decorridos no mesmo dia.
//  A saída deve ser registrada apenas uma vez.
//  tarifaHora deve ser positiva.
// Teste no ex6.php: simule permanências de 40, 60 e 125 minutos e verifique a cobrança.

require_once '../vendor/autoload.php';

use App\TicketEstacionamento;

$carro1 = new TicketEstacionamento("EFJ345", 600, 0, 5);
$carro1->registrarSaida(640);

echo $carro1->resumo();

?>