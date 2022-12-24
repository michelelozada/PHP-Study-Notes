> **Estrutura de repetição - Loop while**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
```php
<?php

// Escreva um programa que, sendo fornecido um número, faça sua contagem regressiva, destacando os números múltiplos de 5

$n = 25;

while($n >= 0)
{
    if($n % 5 != 0 || $n == 0)
    {
        echo "$n ";
    }
    else
    {
        echo "[$n] ";    
    }    
    $n--;
}   

# Retorna: [25] 24 23 22 21 [20] 19 18 17 16 [15] 14 13 12 11 [10] 9 8 7 6 [5] 4 3 2 1 0 
```
&nbsp;    
**Sintaxe alternativa para estrutura de controle while**
```php
<?php
	
$c = 0;
while($c <= 15):
    echo "$c ";
    $c++;
endwhile;

# Retorna: 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 
```
&nbsp;  
```php
<?php

// Crie um programa que, fornecidos dois números e o passo, imprima o intervalo de números entre eles.

$inicio = 60;
$final = 20;
$passo = 3;

if ($inicio != $final)
    if ($inicio < $final)
    {
        echo "Impressão dos números compreendidos no intervalo de " . $inicio . " até " . $final . " (com incremento de " . $passo . "):<br>";	
        while($inicio <= $final)
        {
    	    echo $inicio . " ";
            $inicio += $passo ;
        }
    }
    else 
    {
	echo "Impressão dos números compreendidos no intervalo de " . $inicio . " até " . $final . " (com decremento de " . $passo . " números):<br>";	
        while($inicio >= $final)
        {
            echo $inicio . " ";
    	    $inicio -= $passo ;
        }
    }  
else
{
    echo "Atenção: você precisa escolher dois números distintos para a criação de um intervalo a ser impresso aqui.";
}	

/* Retorna: 
Impressão dos números compreendidos no intervalo de 60 até 20 (com decremento de 3 números):
60 57 54 51 48 45 42 39 36 33 30 27 24 21
*/
```
&nbsp;
```php
<?php

// Dado um array com uma lista de tarefas, apresente-a de forma sequencial para o usuário: 

$tasks = [
	'Relacionar ideias para sessão de fotos',
	'Consultar a pesquisa com os usuários',
	'Melhorar o texto da campanha',
	'Enviar o protótipo para Carla',
	'Solicitar feedback sobre o design'
];

$i = 0;
$taskNumber = 1;

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
```