<?php 

// Exercício 1 - Retângulo [Fixação]

// Classe: Retangulo
// Propriedades:
//  private float $largura
//  private float $altura
// Métodos e retornos:
//  area(): float - retorna largura * altura.
//  perimetro(): float - retorna 2 * (largura + altura).
//  ehQuadrado(): bool - retorna true quando largura e altura forem iguais.
// Regras:
//  Receba largura e altura no construtor, preferencialmente com property promotion.
//  As dimensões devem ser maiores que zero. Valores inválidos não devem deixar o objeto em um estado
// inconsistente.
// Teste no ex1.php: crie pelo menos dois retângulos, sendo um deles um quadrado, e mostre área, perímetro e o
// resultado de ehQuadrado().

require_once '../vendor/autoload.php';

use App\Retangulo;

$R1 = new Retangulo(20, 20);
$R2 = new Retangulo(20, 10);

function poligono($poligono){
    if($poligono->ehQuadrado()){
        $resultado = "é um quadrado";
    } else{
        $resultado = "não é um quadrado";
    }
    return $resultado;
}


$area1 = $R1->area();
$area2 = $R2->area();
$perimetro1 = $R1->perimetro();
$perimetro2 = $R2->perimetro();
$resultado1 = poligono($R1);
$resultado2 = poligono($R2);


echo "A area do primeiro poligono é $area1" . "\nO perimetro é $perimetro1" . "\nEle $resultado1";
echo "\n\n";
echo "A area do segundo poligono é $area2" . "\nO perimetro é $perimetro2" . "\nEle $resultado2";


?>