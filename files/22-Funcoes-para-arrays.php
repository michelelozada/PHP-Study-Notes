/*
 *  Funções de arrays
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   

// 1. Retorna  o número de elementos de um array: função count()
$frutas = array('maçã','laranja','banana','mamão');
echo count($frutas); # Retorna: 4

$ficha = [235,'Ana Luisa Braga', [19, 'estudante', true]];
echo count($ficha); # 3

$endereco['logradouro'] = 'Rua Cleide Geronasso';
$endereco['numero'] = 1525;
$endereco['complemento'] = 'apartamento 2';
$endereco['cidade'] = 'Curitiba';
$endereco['estado'] = 'PR';
echo count($endereco); # 5


// 2. Retorna o maior valor de um array: função max()
$numbers = [15,27,39,41,50];
echo max($numbers); # Retorna: 50


// 3. Retorna o maior valor de um array: função min()
$numbers = [15,27,39,41,50];
echo max($numbers); # Retorna: 15


// 4. Retorna um array com elementos ordenados em ordem crescente: função sort()
$nomes = array('Bob','Ester','Ana','Dani','Carla');
sort($nomes);
foreach ($nomes as $key => $value){
    echo "nomes[" . $key . "] = " . $value . "\n";
}

/* Retorna:
nomes[0] = Ana
nomes[1] = Bob
nomes[2] = Carla
nomes[3] = Dani
nomes[4] = Ester
*/


// 5. Retorna um array com elementos ordenados em ordem decrescente: função rsort()
$nomes = array('Bob','Ester','Ana','Dani','Carla');
rsort($nomes);
foreach ($nomes as $key => $value){
    echo "nomes[" . $key . "] = " . $value . "\n";
}

/* Retorna:
nomes[0] = Ester
nomes[1] = Dani
nomes[2] = Carla
nomes[3] = Bob
nomes[4] = Ana
*/


// 6. Verifica se um determinado valor existe em um array: função in_array()
$legumes = ['abóbora', 'berinjela', 'chuchu', 'tomate', 'pepino'];
if(in_array('tomate', $legumes)){
    echo "Sim, existe tomate no array.\n";
} 
if(in_array('feijão', $legumes)){
    echo "Sim, existe feijão no array.";0
} 
if(in_array('chuchu', $legumes)){
    echo "Sim, existe chuchu no array.";
} 
/* Retorna: 
Sim, existe tomate no array.
Sim, existe chuchu no array.
*/


// 7. Retornando se uma determainada chave existe no array: função array_key_exists()
$endereco = array(
				'logradouro' => 'Rua Cleide Geronasso',
				'numero' => 1525,
				'complemento' => 'apartamento 2',
				'cidade' => 'Curitiba',
				'estado' => 'PR'
			);
if(array_key_exists('cidade', $endereco)){
	echo 'A chave informada existe no array.';
}else {
	echo 'A chave informada não existe no array.';
}
// Retorna: Esta chave existe no array.


// 8.  Procurando um valor em um array e retornando sua chave correspondente, caso encontrada: função array_search()
$endereco = array(
				'logradouro' => 'Rua Cleide Geronasso',
				'numero' => 1525,
				'complemento' => 'apartamento 2',
				'cidade' => 'Curitiba',
				'estado' => 'PR'
			);
if(in_array('Curitiba',$endereco)){
	echo 'A chave corresponde ao valor informado é: '. array_search('Curitiba',$endereco) . '.';
}else{
    echo 'Não há chave correspondente ao valor informado.';
}
// Retorna: A chave corresponde ao valor informado é: cidade


// 9. Misturando os elementos de um array: função shuffle()
$nomes = ['Ana','Bia','Carla','Dani','Érica'];
shuffle($nomes);
print_r($nomes); 

/* Retorna:
Array
(
    [0] => Bia
    [1] => Dani
    [2] => Carla
    [3] => Érica
    [4] => Ana
)
*/