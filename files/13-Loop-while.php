/*
 *  Estrutura de repetição - Loop while
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */


<?php


// Dado um array com uma lista de tarefas, apresente-a de forma sequencial para o usuário: 

$tasks = [
	'Relacionar ideias para sessão de fotos',
	'Consultar a pesquisa com os usuários',
	'Melhorar o texto da campanha',
	'Enviar o protótipo para Carla',
	'Solicitar feedback sobre o design'
];

$i=0;
$taskNumber=1;

echo 'To-Do List para o dia 22-06-2022:'. "\n";
while($taskNumber <= count($tasks)){
	echo " . Task nº " . $taskNumber . ": " . $tasks[$i] . "\n";
	$taskNumber++;
	$i++;
}
	
/* Retorna:
To-Do List para o dia 22-06-2022:
 . Task nº 1: Relacionar ideias para sessão de fotos
 . Task nº 2: Consultar a pesquisa com os usuários
 . Task nº 3: Melhorar o texto da campanha
 . Task nº 4: Enviar o protótipo para Carla
 . Task nº 5: Solicitar feedback sobre o design
*/