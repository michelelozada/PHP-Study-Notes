> **Estrutura de repetição - Loop foreach**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;       
**Exemplo do uso de foreach em um array indexado**
```php
<?php   
	
$pedras = ['rubi', 'esmeralda', 'turmalina', 'jade', 'opala'];
					
foreach($pedras as $value){
	echo "$value \n";
}
		
/* Retorna:
rubi 
esmeralda 
turmalina 
jade 
opala 
*/
```
&nbsp;
&nbsp;  
**Sintaxe alternativa para estrutura de controle foreach**
```php
<?php

$pedras = ['rubi', 'esmeralda', 'turmalina', 'jade', 'opala'];
					
foreach($pedras as $value):
	echo "$value \n";
endforeach;
```
&nbsp;
&nbsp;  
**Exemplo do uso de foreach em um array associativo:**
```php
<?php   

$coresPedras = ['rubi' => 'vermelha',
                'esmeralda' => 'verde',
                'turmalina' => 'azul',
                'jade' => 'verde',
                'opala' => 'azul'];

foreach($coresPedras as $key => $value){
	echo ucfirst($key) . ' é uma pedra preciosa de cor ' . $value . ".\n";		
}

/* Retorna:
Rubi é uma pedra preciosa de cor vermelha.
Esmeralda é uma pedra preciosa de cor verde.
Turmalina é uma pedra preciosa de cor azul.
Jade é uma pedra preciosa de cor verde.
Opala é uma pedra preciosa de cor azul.
*/
```
&nbsp;
&nbsp;  
**Exemplo do uso de foreach em um array multidimensional**
```php
<?php   

$disciplinas = array(array("História","sala 04","09:00"),
                     array("Geografia","sala 12","10:00"),
                     array("Matemática ","sala 07","11:00"));
 
foreach($disciplinas as $valor){
    echo "$valor[0]\n";
    echo "$valor[1]\n";
    echo "$valor[2]\n";
    echo "\n";
}     
 
/* Retorna:
História
sala 04
09:00

Geografia
sala 12
10:00

Matemática 
sala 07
11:00
*/
```