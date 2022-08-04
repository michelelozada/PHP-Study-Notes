> **Estrutura de repetição - Loop do-while**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// Escreva um algoritmo que realize um sorteio dentre o intervalo de 1 a 60 e que retorne três números aleatórios. 

$contador = 1;
echo "-- Resultado do sorteio -- \n";  
do{
	$sorteio = rand(1,60);
	echo $contador . 'º número sorteado: ' . $sorteio . "\n";
	$contador ++;
}while ($contador < 4);


/* Outupts possíveis:
1ª execução:
	-- Resultado do sorteio -- 
	1º número sorteado: 35
	2º número sorteado: 28
	3º número sorteado: 54

2ª execução:
	-- Resultado do sorteio -- 
	1º número sorteado: 56
	2º número sorteado: 5
	3º número sorteado: 48
	
3ª execução:
	-- Resultado do sorteio -- 
	1º número sorteado: 3
	2º número sorteado: 60
	3º número sorteado: 6
```