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
        if($this->ladoA <= 0 || $this->ladoB <= 0 || $this->ladoC <= 0){
            throw new InvalidArgumentException('Todos os lados devem ser maiores que zero!');
        }
        // ehValido();
    }

    public function ehValido(): bool
    {
        if(($this->ladoA + $this->ladoB) < $this->ladoC && ($this->ladoC + $this->ladoB) < $this->ladoA && ($this->ladoA + $this->ladoC) <  $this->ladoB  ){
            throw new InvalidArgumentException('Pelo menos um lado deve ser maior que a soma dos outros 2!');
            return false;
        }
        return true;
    }

    public function perimetro(): float
    {
        $perimetro = 2 * ($this->altura + $this->largura);
        return $perimetro;
    }

    public function classificar(): string
    {
        if($this->ladoA == $this->ladoB && $this->ladoB == $this->ladoC){
            $class = 'equilatero';
        }

        elseif($this->ladoA != $this->ladoB && $this->ladoB != $this->ladoC && $this->ladoA != $this->ladoC){
            $class = 'escaleno';
        }

        elseif($this->ladoA == $this->ladoB || $this->ladoB == $this->ladoC || $this->ladoA == $this->ladoC){
            $class = 'isoceles';
        } else {
            $class = 'considerado INVÁLIDO!';
        }
        return "É um triangulo $class";
    }
}
?>

