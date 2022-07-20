/*
 *  Estrutura de controle - Else if
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */


<?php
	
// Já posso votar nestas eleições?	
	
$idade = 19;
$alfabetizado = false;

if($alfabetizado == false) {
	echo 'Você declarou ser analfabeto(a) e, portanto, seu alistamento eleitoral e voto são facultativos';
} else{
	if($idade >= 16 && $idade < 18){
		echo 'Sim, você pode se alistar para votar (lembrando que o voto é facultativo para sua faixa de idade).';	
	} else if ($idade >= 18 && $idade <= 69){
		echo 'Sim, o voto é obrigatório para a sua faixa de idade.';	
	} else if ($idade > 70) {
		echo 'Sim, você pode votar (lembrando que o voto é facultativo para pessoas com 70 anos ou mais).';	
	} else{
		echo 'Não, você ainda não tem idade mínima (16 anos) para se alistar e votar.';
	}
}
// Retorna: Você declarou ser analfabeto(a) e, portanto, seu alistamento eleitoral e voto são facultativos

$idade = 17;
$alfabetizado = true;
// Retorna: Sim, você pode se alistar para votar (lembrando que o voto é facultativo para sua faixa de idade).

$idade = 42;
$alfabetizado = true;
// Retorna: Sim, o voto é obrigatório para a sua faixa de idade.

$idade = 72;
$alfabetizado = true;
// Retorna: Sim, você pode votar (lembrando que o voto é facultativo para pessoas com 70 anos ou mais).

$idade = 15;
$alfabetizado = true;
// Retorna: Não, você ainda não tem idade mínima (16 anos) para se alistar e votar.