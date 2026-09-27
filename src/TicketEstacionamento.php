<?php

namespace App;
use InvalidArgumentException;
class TicketEstacionamento
{
    public function __construct(
        public string $placa,
        private int $entradaMin,
        private int $saidaMin,
        private float $tarifaHora
    ) {
        if ($this->tarifaHora <= 0) {
            throw new InvalidArgumentException('A tarifaHora deve ser positiva');
        }
    }

    public function registrarSaida(int $minuto): bool 
    {
        if ($this->entradaMin < $minuto){
            $this->saidaMin = $minuto;
            return true;
        }
        else{
            echo "A hora de saida deve ser maior que a de entrada!";
            return false;
        }
    }

    public function duracaoMin(): int
    {
        if ($this->saidaMin <= 0){
            return 0;
        } else{
            return $this->saidaMin - $this->entradaMin;
        }
    }

    public function valorAPagar(): float
    {
        return round(($this->duracaoMin() / 60) * $this->tarifaHora); // 5 reais a hora
    }

    public function resumo(): string
    {
        return "Placa do carro: {$this->placa}" . PHP_EOL . "Tempo no estacionamento: {$this->duracaoMin()}" . PHP_EOL . "Valor a pagar: {$this->valorAPagar()} reais";
    }
}
