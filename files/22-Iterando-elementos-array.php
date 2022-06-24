/*
 *  Iterando elementos de um array  
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   
	
//1. Exemplo do uso de foreach em um array indexado:
	
$pedrasPreciosas = ['rubi', 'esmeralda', 'turmalina', 'jade', 'opala', 'safira', 'turquesa', 'ametista'];
					
foreach ($pedrasPreciosas as $gemstones){
	echo $gemstones . '\n';
}
	
	
/* Retorna:
Rubi
Esmeralda
Turmalina
Jade
Opala
Safira
Turquesa
Ametista
*/


//2. Exemplo do uso de foreach em um array associativo:

$coresPedras = [  
			'rubi' => 'vermelha',
			'esmeralda' => 'verde',
			'turmalina' => 'azul',
			'jade' => 'verde',
			'opala' => 'azul',
			'safira' => 'azul',
			'turquesa' => 'verde',
			'ametista' => 'violeta'
];

foreach($coresPedras as $gemStone => $gemColors){
	echo ucfirst($gemStone) . ' é uma pedra preciosa de cor ' . $gemColors . ".\n";		
}

/* Retorna:
Rubi é uma pedra preciosa de cor vermelha.
Esmeralda é uma pedra preciosa de cor verde.
Turmalina é uma pedra preciosa de cor azul.
Jade é uma pedra preciosa de cor verde.
Opala é uma pedra preciosa de cor azul.
Safira é uma pedra preciosa de cor azul.
Turquesa é uma pedra preciosa de cor verde.
Ametista é uma pedra preciosa de cor violeta.
*/



//3. Exemplo do uso de foreach em um array multidimensional:

$gradeCurricular = [
	['Artes','80'], 
	['Ciências','120'],
	['Geografia','80'],
	['História','80'],
];

foreach($gradeCurricular as $matriz){
	foreach($matriz as $novaMatriz){
		echo $novaMatriz . "\n";
	}
}

/* Retorna:
Artes
80
Ciências
120
Geografia
80
História
80
*/