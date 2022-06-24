/*
 *  Arrays multidimensionais
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   
	
//1 - Criando um array multidimensional
	
$gradeCurricular = [
	['Artes','80'], 
	['Ciências','120'],
	['Geografia','80'],
	['História','80'],
];
print_r($gradeCurricular);

/* Retorna:
Array
(
    [0] => Array
        (
            [0] => Artes
            [1] => 80
        )

    [1] => Array
        (
            [0] => Ciências
            [1] => 120
        )

    [2] => Array
        (
            [0] => Geografia
            [1] => 80
        )

    [3] => Array
        (
            [0] => História
            [1] => 80
        )

)
*/


// 2 - Inserindo elementos no array
$gradeCurricular[] = ['Português','280'];
$gradeCurricular[] = ['Matemática','280'];
print_r($gradeCurricular);
/*
Array
(
    [0] => Array
        (
            [0] => Artes
            [1] => 80
        )

    [1] => Array
        (
            [0] => Ciências
            [1] => 120
        )

    [2] => Array
        (
            [0] => Geografia
            [1] => 80
        )

    [3] => Array
        (
            [0] => História
            [1] => 80
        )

    [4] => Array
        (
            [0] => Português
            [1] => 280
        )

    [5] => Array
        (
            [0] => Matemática
            [1] => 280
        )

)
*/


// 3 - Removendo elementos do array:

$gradeCurricular = [
	['Artes','80'], 
	['Ciências','120'],
	['Geografia','80'],
	['História','80'],
];
unset($gradeCurricular[1]);
print_r($gradeCurricular);

/* Retorna:
Array
(
    [0] => Array
        (
            [0] => Artes
            [1] => 80
        )

    [2] => Array
        (
            [0] => Geografia
            [1] => 80
        )

    [3] => Array
        (
            [0] => Historia
            [1] => 80
        )

)
*/