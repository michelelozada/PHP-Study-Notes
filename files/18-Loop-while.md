> **Estrutura de repetição - Loop while**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
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
```
&nbsp;   
```php
<?php

// Crie um programa que, fornecidos dois números de início e fim, imprima na tela o intervalo entre eles com o incremento/decremento também a ser fornecido. 

$inicio = 60;
$final = 20;
$passo = 3;

if ($inicio < $final)
{
    echo "Impressão dos números compreendidos no intervalo de " . $inicio . " até " . $final . " (com incremento de " . $passo . "):<br>";	
    while($inicio<=$final)
    {
	    echo $inicio . "<br>";
        $inicio += $passo ;
    }
}
else if ($inicio > $final)
{
    echo "Impressão dos números compreendidos no intervalo de " . $inicio . " até " . $final . " (com decremento de " . $passo . " números):<br><br>";	
    while($inicio>=$final)
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
?>
```
