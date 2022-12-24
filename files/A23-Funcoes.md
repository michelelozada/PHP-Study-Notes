> **Funções**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
```php	
<?php

// Escreva um programa que some os números compreendidos entre dois números fornecidos (ambos a serem inclusos na soma tb)

function somador($x, $y){
    $total = 0;
    for($c = $x; $c <= $y; $c++){
        $total += $c;
    }
    return $total;
}

$a = 20;
$b = 26;
$res = somador($a, $b);
echo "O valor da soma dos números compreendidos entre $a e $b (ambos inclusos) é $res.";

# Retorna: O valor da soma dos números compreendidos entre 20 e 26 (ambos inclusos) é 161.
```
&nbsp;
&nbsp;
```php	
<?php
	
/*
Crie uma função para cálculo de notas de um aluno, sendo que:
- A atividade prática deve ter peso de 40%.
- A prova deve ter peso de 60%.
- Deve ser informado também se aluno foi aprovado, ficou em recuperação ou se reprovou.
*/

function retornarMedia($x, $y){
	return ($x * 0.4 + $y * 0.6);
}

function retornarStatus($z){
	if ($z >= 7.0){
	    return "está aprovado";   
	} 
	elseif($z >= 5.0 && $z < 7.0){
	    return "deve fazer prova de recuperação";
	}
	else{
	    return "está reprovado";
	}
}

$atividade = 7.5;
$prova = 6.5;

$media = retornarMedia($atividade, $prova);
$status = retornarStatus($media);
echo "Média final obtida pelo aluno: $media\n";
echo "Situação do aluno: $status";

/* Retorna: 
Média final obtida pelo aluno: 6.9
Situação do aluno: deve fazer prova de recuperação
*/
```
&nbsp;
&nbsp;    
**As formas de envio de parâmetros**   
```php
<?php  

// 1 - Passagem de parâmetros por valor
function teste($x){
    $x += 2;
    echo $x;
}
$a = 3;
teste($a); # Retorna: 5
echo $a; # Retorna: 3 (valor da variável $a não foi alterado)


// 2 - Passagem de parâmetros por referência
function teste(&$x){
    $x += 2;
    echo $x;
}    
$a = 3;
teste($a); # Retorna: 5
echo $a; # Retorna: 5 (a alteração em $x alterou o valor de $a)
```