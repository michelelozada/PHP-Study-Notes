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
} # Retorna: Esta chave existe no array.


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
}  # Retorna: A chave corresponde ao valor informado é: cidade


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


// 10. Combinando um ou mais arrays: função array_merge()

# 10.1 - Combinando dois arrays associativos (note que elementos com a mesma chave são sobrescritos por elementos do array subsequente)
$nomes1 = array(
	'a' => 'Ana',
	'b' => 'Bia',
	'c' => 'Carla',
	'd' => 'Dani',
	'e' => 'Erica'
);
$nomes2 = array(
	'a' => 'Alexandre',
	'e' => 'Enzo',
	'i' => 'Igor',
	'o' => 'Otávio',
	'u' => 'Ulisses'
);

$listaNomes = array_merge($nomes1, $nomes2); 
print_r($listaNomes);

/* Retorna:
Array
(
    [a] => Alexandre
    [b] => Bia
    [c] => Carla
    [d] => Dani
    [e] => Enzo
    [i] => Igor
    [o] => Otávio
    [u] => Ulisses
) */


# 10.2 - Combinando dois arrays indexados (elementos não são sobrescritos aqui)
$nomes1 = array('Ana','Bia','Carla','Dani','Erica');
$nomes2 = array('Alexandre','Enzo','Igor','Otávio','Ulisses');

$listaNomes = array_merge($nomes1, $nomes2);

print_r($listaNomes);
/* Retorna:
Array
(
    [0] => Ana
    [1] => Bia
    [2] => Carla
    [3] => Dani
    [4] => Erica
    [5] => Alexandre
    [6] => Enzo
    [7] => Igor
    [8] => Otávio
    [9] => Ulisses
) */


// 11. Aplicando uma função a todos os elementos dos arrays fornecidos: função array_map() 

# 11.1 - Exemplo:
function soma2($n){
    return ($n + 2);
}

$a = [1,2,3,4,5];
$b = array_map('soma2',$a);
print_r($b);

/* Retorna: 
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
    [3] => 6
    [4] => 7
) */

# 11.2 - Exemplo:
$a = ['ana','bia','carla','dani'];
$b = array_map('ucfirst',$a);
print_r($b);

/* Retorna: 
Array
(
    [0] => Ana
    [1] => Bia
    [2] => Carla
    [3] => Dani
) */