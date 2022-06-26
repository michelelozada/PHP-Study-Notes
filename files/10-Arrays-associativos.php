/*
 *  Arrays associativos
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   
	
// 1. Criando um array associativo
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


// 2. Acessando elementos de um array associativo
echo $endereco['logradouro'] = 'Rua Cleide Geronasso'; # Retorna: Rua Cleide Geronasso
echo $endereco['cidade'] = 'Curitiba'; # Curitiba


// 3 . Inserindo novos elementos na última posição do array
$endereco['pais'] = 'Brasil';
print_r ($endereco);
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
    [pais] => Brasil
)
*/


// 4. Substituindo elementos em um array
$endereco['numero'] = 152;
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 152
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
    [pais] => Brasil
)
*/


// 5. Removendo elementos de um array
/* Retorna:
unset($endereco['pais']);
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 152
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
)
*/


// 6. Juntando os elementos de uma matriz numa string
$string = implode(', ',$endereco);
echo $string;
# Retorna: Rua Cleide Geronasso, 152, apartamento 2, Curitiba, PR