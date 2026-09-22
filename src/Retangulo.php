<?php

namespace App;
use InvalidArgumentException;
class Retangulo
{
    public function __construct(
        private float $largura,
        private float $altura
    ) {
        if($this->altura <= 0){
            throw new InvalidArgumentException('A altura deve ser maior que zero');
        }
        if($this->largura <= 0){
            throw new InvalidArgumentException('A largura deve ser maior que zero');
        }
    }

    public function area(): float
    {
        $area = $this->altura * $this->largura;
        return $area;
    }

    public function perimetro(): float
    {
        $perimetro = 2 * ($this->altura + $this->largura);
        return $perimetro;
    }

    public function ehQuadrado(): bool
    {
        return $this->altura == $this->largura;
    }
}
?>

