<?php

namespace App;
use InvalidArgumentException;
class IngressoCinema
{
    public function __construct(
        public string $filme,
        private float $precoBase,
        private bool $meiaEntrada = false
    ) {
        if($this->precoBase <= 0){
            throw new InvalidArgumentException('O preço base deve ser maior que zero');
        }
    }

    public function calcularValorFinal(): float
    {   
        if($this->meiaEntrada == true){
            $valorfinal = $this->precoBase / 2;
        } else{
            $valorfinal = $this->precoBase;
        }
        return $valorfinal;
    }

    public function definirMeiaEntrada(bool $possuiDireito): void
    {
        $this->meiaEntrada = $possuiDireito;
    }

    public function resumo(): string
    {
        if($this->meiaEntrada == true){
            $tipoIngresso = "Meia";
        } else{
            $tipoIngresso = "Inteiro";
        }
        return "O filme escolhido foi $this->filme" . PHP_EOL . "O ingresso é $tipoIngresso" . PHP_EOL . "O valor final fica R$ {$this->calcularValorFinal()}";
    }
}
?>

