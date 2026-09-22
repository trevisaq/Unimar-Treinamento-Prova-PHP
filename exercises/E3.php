<?php 

// Exercício 3 - Ingresso de cinema [Fixação]

// Classe: IngressoCinema
// Propriedades:
//  public string $filme
//  private float $precoBase
//  private bool $meiaEntrada
// Métodos e retornos:
//  calcularValorFinal(): float - retorna o preço integral ou 50% do preço base.
//  definirMeiaEntrada(bool $possuiDireito): void - altera a condição de meia-entrada.
//  resumo(): string - retorna filme, tipo do ingresso e valor final.
// Regras:
//  Utilize property promotion no construtor para as propriedades que fizer sentido.
//  precoBase deve ser maior que zero.
//  O preço final deve ser calculado pelo método e não armazenado manualmente.
// Teste no ex3.php: crie dois ingressos para o mesmo filme, um inteiro e um meia-entrada, e compare os valores

require_once '../vendor/autoload.php';

use App\IngressoCinema;

$I1 = new IngressoCinema("Batman, o cavaleiro das trevas", 20, false);
$I2 = new IngressoCinema("Batman, o cavaleiro das trevas", 20, true);

echo "================= INGRESSO 1 =================\n";
echo $I1->resumo();

echo "\n\n";
echo "\n================= INGRESSO 2 =================\n";
echo $I2->resumo();



?>