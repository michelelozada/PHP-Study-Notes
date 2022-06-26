/*
 *  Arrays indexados
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
 
 
<?php
	
// 1.1. Criando um array indexado
$emptyArray = array();
$numberArray = array(1,2,3,4,5);

// 1.2. Sintaxe alternativa para criação de arrays (notação JSON):
$emptyArray = [];
$numberArray = [1,2,3,4,5];


// 2. Exibindo o conteúdo de um array

//2.1. Via print_r
$frutas = array('maçã','laranja','banana','mamão');
print_r ($frutas);	
/* Retorna:
Array
(
    [0] => maçã
    [1] => laranja
    [2] => banana
    [3] => mamão
)
*/

//2.2. Via var_dump()
$frutas = array('maçã','laranja','banana','mamão');
var_dump($frutas);
/* Retorna:
array(4) {
  [0]=>
  string(6) "maçã"
  [1]=>
  string(7) "laranja"
  [2]=>
  string(6) "banana"
  [3]=>
  string(6) "mamão"
}
*/

//2.3. Via foreach()
$frutas = array('maçã','laranja','banana','mamão');
foreach ($frutas as $fruit) {
    echo $fruit . ' ';
}
# Retorna: maçã laranja banana mamão 

$frutas = array('maçã','laranja','banana','mamão');
foreach ($frutas as $key => $value) {
    echo "[" . $key . "]" . ' ' . $value . "\n";
}
/* Retorna: 
[0] maçã
[1] laranja
[2] banana
[3] mamão
*/


// 3. Acessando elementos de um array indexado
$frutas = array('maçã','laranja','banana','mamão');
echo $frutas[0]; # retorna maçã
echo $frutas[1]; # laranja
echo $frutas[3]; # mamão


// 4. Inserindo novos elementos na última posição do array
$frutas = array('maçã','laranja','banana','mamão');
$frutas[] = 'morango';
$frutas[] = 'pêssego';
print_r($frutas);
/* Retorna:
Array
(
    [0] => maçã
    [1] => laranja
    [2] => banana
    [3] => mamão
    [4] => morango
    [5] => pêssego
)
*/
	
	
// 5. Substituindo elementos em um array
$frutas = array('maçã','laranja','banana','mamão');
$frutas[0] = 'tangerina';
$frutas[3] = 'cereja';
print_r($frutas);
/* Retorna:
Array
(
    [0] => tangerina
    [1] => laranja
    [2] => banana
    [3] => cereja
)
*/


// 6. Removendo elementos de um array
$frutas = array('maçã','laranja','banana','mamão');
unset($frutas[2]);
print_r($frutas);
/* Retorna:
Array
(
    [0] => maçã
    [1] => laranja
    [3] => mamão
)
*/


// 7. Juntando os elementos de uma matriz numa string

$frutas = array("maçã","abacaxi","laranja");
$string = implode(' - ',$frutas);
echo $string; 
# Retorna: maçã - abacaxi - laranja

$frutas = array("maçã","abacaxi","laranja");
echo implode(', ',$frutas); 
# Retorna: maçã, abacaxi, laranja