> **Estrutura de repetição - Loop foreach**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;       
**Exemplo do uso de foreach em um array indexado**
```php
<?php   
	
$pedrasPreciosas = ['rubi', 'esmeralda', 'turmalina', 'jade', 'opala', 'safira', 'turquesa', 'ametista'];
					
foreach ($pedrasPreciosas as $gemstone){
	echo $gemstone . "\n";
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
```
&nbsp;
&nbsp; 

**Exemplo do uso de foreach em um array associativo:**
```php
<?php   

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

foreach($coresPedras as $key => $value){
	echo ucfirst($key) . ' é uma pedra preciosa de cor ' . $value . ".\n";		
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
```
&nbsp;
&nbsp;  
**Exemplo do uso de foreach em um array multidimensional**
```php
<?php   

$disciplinas = array (
    array("História","sala 04","09:00"),
    array("Geografia","sala 12","10:00"),
    array("Matemática ","sala 07","11:00")
);
 
foreach($disciplinas as $rnumber => $disciplina) {
	foreach($disciplina as $cnumber => $value) {
		echo "O índice [" . $rnumber . "][" . $cnumber . "] do array contém: " . $value . ".\n";
	}
}
 
/* Retorna:
O índice [0][0] do array contém: História
O índice [0][1] do array contém: sala 04
O índice [0][2] do array contém: 09:00
O índice [1][0] do array contém: Geografia
O índice [1][1] do array contém: sala 12
O índice [1][2] do array contém: 10:00
O índice [2][0] do array contém: Matemática 
O índice [2][1] do array contém: sala 07
O índice [2][2] do array contém: 11:00
*/
```
&nbsp;
&nbsp;  
**Sintaxe alternativa para estrutura de controle `foreach`**
```php
<?php

$frutas = ['amora', 'uva', 'caqui', 'laranja'];
					
foreach ($frutas as $valor):
	echo "$valor ";
endforeach;

# Retorna: amora uva caqui laranja 
```