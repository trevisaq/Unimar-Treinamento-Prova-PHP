<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 14 - Bateria de dispositivo [Preparação para prova]
// Classe: BateriaDispositivo

// Propriedades:
// - public string $dispositivo
// - private int $carga

// Métodos e retornos:
// - usar(int $minutos): bool - consome 1% de carga a cada 5 minutos iniciados.
// - carregar(int $percentual): int - adiciona carga e retorna quanto foi realmente acrescentado.
// - nivel(): int - retorna a carga atual.
// - estaCritica(): bool - retorna true quando carga <= 15.
// - status(): string - retorna dispositivo e nível.

// Regras:
// - A carga deve permanecer entre 0 e 100.
// - Não é possível usar o dispositivo quando a carga estiver em 0.
// - Se o tempo solicitado exigir mais carga do que existe, consuma somente até zerar e retorne false.
// Teste no ex14.php: inicie com uma carga intermediária, faça usos de diferentes durações, carregue acima de 100%
// e confirme o valor efetivamente adicionado.

require_once '../vendor/autoload.php';

use App\BateriaDispositivo;

$DISPO = new BateriaDispositivo('Asus Vivobook GO 200', 70);


$DISPO->usar(5);
$DISPO->usar(45); // 50
$DISPO->usar(226); // 276 minutos | + 4h e 30min | 70 -> 14%
echo $DISPO->status();

echo "\n";
if ($DISPO->estaCritica() == true){
    $DISPO->carregar(100);
    echo "\n-----------------------------------------------\n";
    echo "Dipositivo com carga critica!, hora de carregar";
    echo "\n-----------------------------------------------\n";

}
echo "\n";

echo $DISPO->status();


?>