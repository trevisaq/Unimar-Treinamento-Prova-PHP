<?php

namespace App;
use InvalidArgumentException;
class Triangulo
{
    public function __construct(
        private float $ladoA,
        private float $ladoB,
        private float $ladoC
    ) {
        if ($this->ladoA <= 0 || $this->ladoB <= 0 || $this->ladoC <= 0) {
            throw new InvalidArgumentException(
                'Todos os lados devem ser maiores que zero!'
            );
        }

        $this->ehValido();
    }

    public function ehValido(): bool
    {
        if ($this->ladoA + $this->ladoB <= $this->ladoC || $this->ladoA + $this->ladoC <= $this->ladoB || $this->ladoB + $this->ladoC <= $this->ladoA) {
            throw new InvalidArgumentException('Os lados não formam um triângulo válido!');
        }
        return true;
    }

    public function perimetro(): float
    {
        return $this->ladoA + $this->ladoB + $this->ladoC;
    }

    public function classificar(): string
    {
        if ($this->ladoA == $this->ladoB && $this->ladoB == $this->ladoC) {
            $class = 'equilátero';
        } elseif ($this->ladoA != $this->ladoB && $this->ladoB != $this->ladoC && $this->ladoA != $this->ladoC) {
            $class = 'escaleno';
        } else {
            $class = 'isósceles';
        }
        return "É um triângulo $class";
    }
}
