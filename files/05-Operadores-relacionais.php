/*
 *  Operadores relacionais
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
 
 
<?php 
	
//1 - Igual a (==)
echo(4 == 4.0);  # Retorna: true


//2 - Diferente de (<> ou !=)
echo(4 <> 5.0);  # Retorna: true
echo(4 != '4'); # false


//3 - Idêntico a (===)
echo(4 === 4);  # Retorna: true
echo(4 === '4'); # false


//4 - Não idêntico a (!==)
echo(4 !== 4);  # Retorna: false
echo(4 !== '4'); # true


//5 - Menor que (<)
echo(2.5 < 10); # Retorna: true


//6 - Maior ou igual a (>=)
echo(5 >= 13); # Retorna: false
echo(5.0 >= 5); # true


//7 - Menor ou igual a (<=)
echo(10 <= 5); # Retorna: false
echo(10 <= 10.0); # true


//8 - Comparando strings
echo('bom' < 'dia'); # Retorna: true
echo('bom' == 'dia'); # false
echo('bom' > 'dia'); # false
echo('dia' == 'dia'); # true


// 9 - Outros exemplos
$a = 5; // integer
$b = '5'; // string
	
if($a == $b){  // valores apenas são iguais
    echo 'As duas variáveis têm valores iguais; seus tipos podem ser iguais ou diferentes.';
} else{
	echo 'As duas variáveis têm valores diferentes.';
} # Retorna: As duas variáveis têm valores iguais; seus tipos podem ser iguais ou diferentes.
	
	
if($a === $b){  // valores e tipos são iguais
	echo 'As duas variáveis são idênticas: têm valores e tipos iguais.';
} else{
	echo 'As duas variáveis não são idênticas.';
} # Retorna: As duas variáveis não são idênticas.