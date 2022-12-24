> **Estrutura de repetição - Loop do-while**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// Escreva um algoritmo que realize um sorteio dentre o intervalo de 1 a 60 e que retorne três números aleatórios. 

$contador = 1;
echo "-- Resultado do sorteio -- \n";  
do
{
	$sorteio = rand(1,60);
	echo $contador . 'º número sorteado: ' . $sorteio . "\n";
	$contador ++;
}while ($contador < 4);


/* Outputs possíveis:
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
&nbsp;     
```php
<?php

// Imprima a tabuada de multiplicação de um número fornecido pelo usuário

$multiplicador = 5;
$multiplicando = 0;
$produto = 0;

echo "Tabuada do $multiplicador:<br>";
do
{
    $produto = $multiplicador * $multiplicando;
    echo $multiplicador . " x " . $multiplicando . " = " . $produto . "<br>";
    $multiplicando++;
} while ($multiplicando <= 10);
?>

/* Retorna:
Tabuada do 5:
5 x 0 = 0
5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
5 x 4 = 20
5 x 5 = 25
5 x 6 = 30
5 x 7 = 35
5 x 8 = 40
5 x 9 = 45
5 x 10 = 50
*/
```
&nbsp;     
```php
<?php

// Escreva um programa que calcule o fatorial de um número a ser fornecido pelo usuário

<?php
$fatorial = 5;
$resultado = $fatorial;
$contador   = 1;

if ($fatorial > 0){
	do
	{ 
		$resultado = $resultado * $contador;
		$contador ++;
	} while($contador < $fatorial);
	echo "Resultado: O fatorial de $fatorial é $resultado.";
}
elseif ($fatorial == 0)
{
	$resultado = 1;
	echo "Resultado: O fatorial de $fatorial é $resultado.";
}
else
{
	echo "Aviso: Deve ser informado um número inteiro positivo.";
}

# Retorna: O fatorial de 5 é 120.
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>