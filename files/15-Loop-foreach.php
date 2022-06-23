/*
 *  Estrutura de repetição - Loop foreach
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */	


<?php

// Exemplo 1: 
$cores = array('ciano', 'magento','amarelo','preto');
	
# Percorrendo o conteúdo do array 
foreach($cores as $colours){ 
	echo $colours . "\n";
}


/* Retorna: 
ciano
magento
amarelo
preto
*/


// Exemplo 2: 

$funcoes = array(	'Diretor' => 'Roberto Martins',
					'Assistente Administrativo' => 'Marcos Rocha',	
					'Assistente de RH' => 'Paola Mattos',
					'Secretária' => 'Joice Prado');
				
foreach($funcoes AS $functions => $person){
	echo $functions . ': ' . $person . "\n";	
}

/* Retorna:
Diretor: Roberto Martins
Assistente Administrativo: Marcos Rocha
Assistente de RH: Paola Mattos
Secretária: Joice Prado
*/

		
foreach($funcoes AS $functions => $person){
	if($person == 'Paola Mattos'){
		echo 'Sim, '. $person . ' trabalha neste setor, sendo que exerce o cargo de ' . $functions . '.';
	}
}
# Retorna: Sim, Paola Mattos trabalha neste setor, sendo que exerce o cargo de Assistente de RH.