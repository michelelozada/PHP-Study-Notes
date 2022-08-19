> **Funções para arrays**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;      
**1. Retornando  o número de elementos de um array: função `count()`**
```php	 
<?php  

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
```
&nbsp;
&nbsp;  
**2. Criando um array contendo uma sequência a partir de parâmetros pré-definidos: função `range()`**
````php
<?php 

$c = range(5,20,5);
print_r($c);
/*
Array
(
    [0] => 5
    [1] => 10
    [2] => 15
    [3] => 20
)
*/
````
&nbsp;
&nbsp;  
**3. Retornando o maior valor de um array: função `max()`**
```php	 
<?php  

$numbers = [15,27,39,41,50];
echo max($numbers); # Retorna: 50
```
&nbsp;
&nbsp;  
**4. Retornando o maior valor de um array: função `min()`**
```php	 
<?php  

$numbers = [15,27,39,41,50];
echo min($numbers); # Retorna: 15
```
&nbsp;
&nbsp;  
**5. Verificando se um determinado valor existe em um array: função `in_array()`**
```php	 
<?php  

$legumes = ['abóbora', 'berinjela', 'chuchu', 'tomate', 'pepino'];
if(in_array('tomate', $legumes))
{
    echo "Sim, existe tomate no array.\n";
} 
if(in_array('feijão', $legumes))
{
    echo "Sim, existe feijão no array.";
} 
if(in_array('chuchu', $legumes))
{
    echo "Sim, existe chuchu no array.";
} 
/* Retorna: 
Sim, existe tomate no array.
Sim, existe chuchu no array.
*/
```
&nbsp;
&nbsp;  
**6. Retornando se uma determinada *chave* existe no array: função `array_key_exists()`**
```php	 
<?php  

$endereco = array('logradouro'  => 'Rua Cleide Geronasso',
				  'numero'      => 1525,
				  'complemento' => 'apartamento 2',
				  'cidade'      => 'Curitiba',
				  'estado'      => 'PR');
if(array_key_exists('cidade', $endereco))
{
	echo 'A chave informada existe no array.';
}
else
{
	echo 'A chave informada não existe no array.';
} # Retorna: A chave informada existe no array.
```
&nbsp;
&nbsp;  
**7. Procurando um valor em um array e retornando sua chave correspondente, caso encontrada: função `array_search()`**
```php	 
<?php  

$endereco = array(
				'logradouro'  => 'Rua Cleide Geronasso',
				'numero'      => 1525,
				'complemento' => 'apartamento 2',
				'cidade'      => 'Curitiba',
				'estado'      => 'PR');
if(in_array('Curitiba',$endereco))
{
	echo 'A chave corresponde ao valor informado é: '. array_search('Curitiba',$endereco) . '.';
}
else
{
    echo 'Não há chave correspondente ao valor informado.';
}  # Retorna: A chave corresponde ao valor informado é: cidade
```
&nbsp;
&nbsp;  
**8. Misturando os elementos de um array: função `shuffle()`**
```php	 
<?php  

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
```
&nbsp;
&nbsp;  
**9. Combinando um ou mais arrays: função `array_merge()`**
```php	 
<?php  

# 9.1 - Combinando dois arrays associativos (note que elementos com a mesma chave são sobrescritos por elementos do array subsequente)
$nomes1 = array('a' => 'Ana',
	            'b' => 'Bia',
	            'c' => 'Carla',
	            'd' => 'Dani',
	            'e' => 'Erica');
$nomes2 = array('a' => 'Alexandre',
	            'e' => 'Enzo',
	            'i' => 'Igor',
	            'o' => 'Otávio',
	            'u' => 'Ulisses');
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


# 9.2 - Combinando dois arrays indexados (note que elementos não são sobrescritos aqui)
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
```
&nbsp;
&nbsp;  
**10. Aplicando uma função a todos os elementos dos arrays fornecidos: função `array_map()`**
```php	 
<?php  

# 10.1 - Exemplo:
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

# 10.2 - Exemplo:
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
```
&nbsp;
&nbsp;  
**11. Adicionando um ou mais elementos no final de um array: função `array_push()`**  
```php	 
<?php  

$frutas = array('amora','laranja','banana');
array_push($frutas,'framboesa','acerola');
print_r($frutas);
/* Retorna: 
Array
(
    [0] => amora
    [1] => laranja
    [2] => banana
    [3] => framboesa
    [4] => acerola
)
*/
```
&nbsp;
&nbsp;  
**12. Eliminando o último elemento de um array: função `array_pop()`**
```php	 
<?php 

$frutas = array('amora','laranja','banana','acerola');
array_pop($frutas);
print_r($frutas);
/* Retorna: 
Array
(
    [0] => amora
    [1] => laranja
    [2] => banana
)
*/
```
&nbsp;
&nbsp;  
**13. Adicionando um ou mais elementos no início de um array: função `array_unshift()`**
```php	 
<?php 

$frutas = array('amora','laranja','banana');
array_unshift($frutas,"melancia","tangerina");
print_r($frutas);
/* Retorna: 
Array
(
    [0] => melancia
    [1] => tangerina
    [2] => amora
    [3] => laranja
    [4] => banana
)
*/
```
&nbsp;
&nbsp;  
**14. Eliminado o primeiro elemento de um array: função `shift()`**
```php	 
<?php 

$frutas = array('uva','amora','laranja','banana');
array_shift($frutas);
print_r($frutas);
/* Retorna: 
Array
(
    [0] => amora
    [1] => laranja
    [2] => banana
)
*/
```
&nbsp;
&nbsp;  
**15. Deletando o elemento de um array com base em sua chave: função `unset`**  
*Note que após a deleção do elemento, não há alterção nas chaves do elementos subsequentes*
```php
<?php

$frutas = array('amora','laranja','banana','uva');
unset($frutas[1]);
print_r($frutas);
/* Retorna:
Array
(
    [0] => amora
    [2] => banana
    [3] => uva
)
*/
```
&nbsp;
&nbsp;  
**16. Retornando um array com elementos ordenados em ordem crescente: função `sort()`**
```php	 
<?php  

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
```
&nbsp;
&nbsp;  
**17. Retornando um array com elementos ordenados em ordem decrescente: função `rsort()`**
```php	 
<?php  

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
```
&nbsp;
&nbsp;  
**18. Ordenando um array mantendo a associação entre índices e valores: funções `asort()` e `arsort()`**  
*Note que os valores são ordenados, sem que haja alteração dos respectivos índices*
```php	 
<?php  

$frutas = array('c'=>'amora','a'=>'laranja','d'=>'banana','b'=>'uva');
asort($frutas);
print_r($frutas);

/* Retorna:
Array
(
    [c] => amora
    [d] => banana
    [a] => laranja
    [b] => uva
)
*/

$frutas = array('c'=>'amora','a'=>'laranja','d'=>'banana','b'=>'uva');
arsort($frutas);
print_r($frutas);

/* Retorna:
Array
(
    [b] => uva
    [a] => laranja
    [d] => banana
    [c] => amora
)
*/
```
&nbsp;
&nbsp;  
**19. Ordenando um array pelas chaves: funções `ksort()`e `krsort()`**  
*Note que a ordenação é feita apenas pelas chaves, sendo os valores ignorados.*
```php	 
<?php  

$frutas = array('c'=>'amora','a'=>'laranja','d'=>'banana','b'=>'uva');
ksort($frutas);
print_r($frutas);

/* Retorna:
Array
(
    [a] => laranja
    [b] => uva
    [c] => amora
    [d] => banana
)
*/

$frutas = array('c'=>'amora','a'=>'laranja','d'=>'banana','b'=>'uva');
krsort($frutas);
print_r($frutas);

/* Retorna:
Array
(
    [d] => banana
    [c] => amora
    [b] => uva
    [a] => laranja
)
*/
```