<?php

namespace App;
use InvalidArgumentException;
class Semaforo
{
    public function __construct(
        public string $local,
        private string $cor,
        private int $ciclosCompletos
    ) {
        if ($this->cor != "vermelho") {
            throw new InvalidArgumentException('Erro, o semáforo deve iniciar em vermelho');
        }
    }

    public function avancar(): void 
    {
        if ($this->cor == "vermelho"){
            $this->cor = "verde";
        } elseif($this->cor == "verde"){
            $this->cor = "amarelo";
        } elseif($this->cor == "amarelo"){
            $this->cor = "vermelho";
            $this->ciclosCompletos++;
        }
    }

    public function podePassar(): bool
    {
        if ($this->cor == "verde"){
            return true;
        } else {
            return false;
        }
    }

    public function estado(): string
    {
        return "Local do semáforo: {$this->local}" . PHP_EOL . "Cor atual: $this->cor" . PHP_EOL . "Quantidade de ciclos completos: $this->ciclosCompletos";
    }
}
