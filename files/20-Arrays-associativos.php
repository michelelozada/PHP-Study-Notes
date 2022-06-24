/*
 *  Arrays associativos
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   
	
// 1 - Criando um array associativo
$endereco = [];
$endereco['logradouro'] = 'Rua Cleide Geronasso';
$endereco['numero'] = 1525;
$endereco['complemento'] = 'apartamento 2';
$endereco['cidade'] = 'Curitiba';
$endereco['estado'] = 'PR';
print_r ($endereco);
  
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
)
*/


// 2 - Acessando elementos de um array associativo
echo $endereco['logradouro'] = 'Rua Cleide Geronasso'; # Retorna: Rua Cleide Geronasso
echo $endereco['cidade'] = 'Curitiba'; # Curitiba