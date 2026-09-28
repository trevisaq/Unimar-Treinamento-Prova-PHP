<?php 

// ALUNO: Guilherme de Souza Trevisan | RA: 2199249

// Exercício 9 - Personagem de RPG [Prática]
// Classe: PersonagemRPG

// Propriedades:
// - public string $nome
// - public string $classe
// - private int $vida
// - private int $energia

// Métodos e retornos:
// - receberDano(int $pontos): bool - reduz a vida quando pontos > 0.
// - curar(int $pontos): bool - aumenta a vida sem ultrapassar 100.
// - usarHabilidade(int $custoEnergia): bool - consome energia apenas se houver energia suficiente e o personagem
// estiver vivo.
// - descansar(int $pontos): bool - recupera energia sem ultrapassar 100.
// - status(): string - retorna os valores atuais.

// Regras:
// - vida e energia variam de 0 a 100.
// - Um personagem com vida 0 não pode usar habilidade.
// - Nenhum método pode produzir valores negativos ou maiores que 100.
// Teste no ex9.php: simule dano, cura, uso de habilidades, falta de energia e recuperação.

require_once '../vendor/autoload.php';

use App\PersonagemRPG;

$P = new PersonagemRPG('Marsh', 'Bardo feiticeiro supremo da silva', 100, 100);

$P->receberDano(75);
$P->curar(85);
$P->usarHabilidade(90);
$P->usarHabilidade(12); // Aqui, o jogador tenta usar energia acima do possivel
echo "\n";

echo $P->status();


?>