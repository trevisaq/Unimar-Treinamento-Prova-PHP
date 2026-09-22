<?php

namespace App;
use InvalidArgumentException;
class Temperatura
{
    public function __construct(
        private float $celsius
    ) {
        if($this->celsius <= -273.15){
            throw new InvalidArgumentException('A temperatura não deve ser menor que -273.15 graus');
        }
    }

    public function alterar(float $novoValor): bool
    {
        if($novoValor < -273.15){
            echo "A temperatura não deve ser menor que -273.15 graus";  
            return false;
        } else{
            $this->celsius = $novoValor;
            return true;
        }
    }

    public function emFahrenheit(): float
    {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function emKelvin(): float
    {
        return ($this->celsius +  273.15);
    }

    public function descricao(): string
    {
        return "A temperatura em celsius é de: $this->celsius" . PHP_EOL . "A temperatura em Fahrenheit é de: {$this->emFahrenheit()}" . PHP_EOL . "A temperatura em Kelvin é de: {$this->emKelvin()}";
    }

}
?>

