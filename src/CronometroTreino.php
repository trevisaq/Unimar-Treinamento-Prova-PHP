<?php

namespace App;
use InvalidArgumentException;
class CronometroTreino
{
    public function __construct(
        public string $atividade,
        private int $segundosAcumulados = 0
    ) {
        if($this->segundosAcumulados != 0){
            throw new InvalidArgumentException('O cronometro deve iniciar em zero!');
        }
    }

    public function adicionarTempo(int $segundos): bool
    {      
        if($segundos < 0){
            echo "Não é possível somar numeros menores que zero!";
            return false;
        } else {
            $this->segundosAcumulados += $segundos;
            return true;
        }
    }

    public function zerar(): void
    {
        $this->segundosAcumulados = 0;
    }

    public function totalMinutos(): float
    {
        return $this->segundosAcumulados / 60;
    }

    public function formatarTempo(): string
    {
        $total = $this->segundosAcumulados;
        
        $horas = floor($total / 3600);
        $minutos = floor(($total % 3600) / 60);
        $segundos = floor($total % 60);

        return $horas . ":" . $minutos . ":" . $segundos;
    }
}
?>

