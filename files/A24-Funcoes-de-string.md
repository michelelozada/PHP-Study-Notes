> **Funções de string**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**1 - Retornando o tamanho de uma string: função `strlen()`**
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade'; 
echo "A string acima tem " . strlen($citacao) . " carateres (com espaços).";  

# Retorna: A string acima tem 69 carateres (com espaços).
```
&nbsp;
&nbsp;    
**2 - Contando o número ocorrências de uma substring dentro de uma string: função `substr_count()`**  
*Obs: Esta função é case-sensitive.*
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo "A palavra 'passo' aparece " . substr_count($citacao,'passo') . " vezes na string acima.";  

# Retorna: A palavra 'passo' aparece 2 vezes na string acima.
```
&nbsp;
&nbsp;  
**3 - Retornando a posição da primeira ocorrência de uma substring dentro de uma string: função `strpos()`**   
*Obs: Esta função é case-sensitive (conferir também função `stripos()` abaixo)*
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strpos($citacao,'o'); # Retorna: 9
echo strpos($citacao,'O'); # *nada retorna*
```
&nbsp;
&nbsp;  
**4 - Retornando a posição da primeira ocorrência de uma substring dentro de uma string: função `stripos()`**  
*Obs: Esta função é case-insensitive (conferir também função `strpos()` acima)*
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo stripos($citacao,'o'); # Retorna: 9
echo stripos($citacao,'O'); # Retorna: 9
```
&nbsp;
&nbsp;   
**5 - Retornando a posição da última ocorrência de uma substring dentro de uma string: função `strripos()`**  
*Obs: Esta função é case-insensitive 
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strripos($citacao,'o'); # Retorna: 50
echo strripos($citacao,'O'); # Retorna: 50
```
&nbsp;
&nbsp;   
**6 - Convertendo uma string para minúsculas: função `strlower()`** 
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strtolower($citacao); 

# Retorna: um pequeno passo para o homem, um gigantesco passo para a humanidade
```
&nbsp;
&nbsp;   
**7 - Convertendo uma string para maiúsculas: função `strtoupper()`** 
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strtoupper($citacao); 

# Retorna: UM PEQUENO PASSO PARA O HOMEM, UM GIGANTESCO PASSO PARA A HUMANIDADE
```
&nbsp;
&nbsp;   
**8 - Retornando uma string com apenas seu primeiro caractere maiúsculo: função `ucfirst()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo ucfirst($citacao);

# Retorna: Um pequeno passo para o Homem, um gigantesco passo para a Humanidade
```
&nbsp;
&nbsp;   
**9 - Retornando uma string com o primeiro caractere de cada palavra em maiúsculo: função `ucwords()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo ucwords($citacao);

# Retorna: Um Pequeno Passo Para O Homem, Um Gigantesco Passo Para A Humanidade
```
&nbsp;
&nbsp;    
**10 - Substituindo as ocorrências da string de pesquisa pela string de substituição: função `str_replace()`**  
*Obs: Esta função é case-sensitive (conferir também função `str_ireplace()` abaixo)*
```php	
<?php 

$citacao = "Um pequeno passo para o Homem, um gigantesco passo para a Humanidade";
echo str_replace("passo", "salto", $citacao);

# Retorna: Um pequeno salto para o Homem, um gigantesco salto para a Humanidade
```
&nbsp;
&nbsp;  
**11 - Substituindo as ocorrências da string de pesquisa pela string de substituição: função `str_ireplace()`**  
*Obs: Esta função é case-insensitive (conferir também função `str_replace()` acima)*
```php	
<?php 

$citacao = "Um pequeno Passo para o Homem, um gigantesco passo para a Humanidade";
echo str_ireplace("passo", "salto", $citacao);

# Retorna: Um pequeno salto para o Homem, um gigantesco salto para a Humanidade
```
&nbsp;
&nbsp;  
**12 - Retornando parte de/fatiando uma string: função `substr()`**
```php	
<?php 

$citacao = 'Um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
# começando na posição 31 da string até o final
echo substr($citacao,31); # Retorna: um gigantesco passo para a Humanidade

# começando na posição -12 da string até o final
echo substr($citacao,-12); # Retorna: a Humanidade

# começando na posição -12, 'pegando' 16 caracteres
echo substr($citacao,-34,16); # Retorna: gigantesco passo
```
&nbsp;
&nbsp;   
**13 - Repetindo uma string: função `str_repeat()`**  
```php
<?php

echo str_repeat("-=", 10);

# Retorna: -=-=-=-=-=-=-=-=-=-=
```
&nbsp;
&nbsp;  
**14 - Invetendo o conteúdo de uma string: função `strrev()`**  
```php
<?php

echo strrev("Esta linguagem se chama PHP");

#Retorna: PHP amahc es megaugnil atsE
```
&nbsp;
&nbsp;  
**15 - Preenchendo o conteúdo de uma string: função `str_pad()`**
```php
<?php  

$nome = "Carlos";

echo str_pad($nome,15,"*",STR_PAD_RIGHT);
# Retorna: Carlos*********

echo str_pad($nome,15,"*",STR_PAD_LEFT);
# Retorna: *********Carlos

echo str_pad($nome,15,"*",STR_PAD_BOTH);
# Retorna: ****Carlos*****
````
&nbsp;
&nbsp;  
**16 - Retirando o espaço em branco (ou outros caracteres) do início e do fim de uma string: funções `trim()`, `ltrim()` e `rtrim()`** 
```php
<?php 

$nome = "   Ana Maria ";
echo strlen($nome); // Retorna: 13 (caracteres com espaços)

$nome2 = trim($nome);
echo strlen($nome2); // Retorna: 9 (agora sem os espaços do início e do final)

$nome3 = ltrim($nome);
echo strlen($nome3); // Retorna: 10 (agora sem os espaços do início)

$nome4 = rtrim($nome);
echo strlen($nome4); // Retorna: 12 (sem espaço do final)
```
&nbsp;
&nbsp;  
**17- Convertendo uma string num array: função `str_split()`**
```php
<?php  

$str = "bom dia";

$arr1 = str_split($str);

/* Retorna:
Array
(
    [0] => B
    [1] => o
    [2] => m
    [3] =>  
    [4] => d
    [5] => i
    [6] => a
)

*/
$arr2 = str_split($str, 3);

/* Retorna:
print_r($arr2);
Array
(
    [0] => bom
    [1] =>  di
    [2] => a
)
*/
```
&nbsp;
&nbsp;  
**18 - Quebrando uma string de acordo com um determinado número de caracteres: função `wordwrap()`**
```php
<?php
$citacao = "Esse é o singelo segredo da felicidade. Faça o que fizer, não deixe que o passado interfira, não deixe que o futuro incomode. (Osho)";
$res = wordwrap($citacao, 30,"<br>",false);
# Nota: O segundo parâmetro diz respeito ao número de carateres desejado; 'false' define que a palavra não será quebrada ao fim da largura da linha.
echo($res);

/* Retorna:
Esse é o singelo segredo da
felicidade. Faça o que fizer,
não deixe que o passado
interfira, não deixe que o
futuro incomode. (Osho)
*/
```
&nbsp;
&nbsp;  
**19 - Transformando um array em uma string: funções `implode()` ou `join()`** 
```php
<?php
	
$lista = ['laranja', 'maçã', 'abacaxi'];
$str = implode(", ",$lista);
echo($str);
# Retorna: laranja, maçã, abacaxi


$date = "01-03-2022";
$newDate = explode("-","$date");
print_r($newDate);

/* Retorna:
Array
(
    [0] => 01
    [1] => 03
    [2] => 2022
)
*/
```
&nbsp;
&nbsp;  
**20 - Transformando uma string em um array: função `explode()`**
```php
<?php  

$txt = "A persistência traz o êxito";
$array = explode(" ", $txt);
print_r($array);

/* Retorna: 
Array
(
    [0] => A
    [1] => persistência
    [2] => traz
    [3] => o
    [4] => êxito
)
/*
```
&nbsp;
&nbsp;  
**21 - Retornando informações sobre palavras usadas em uma string: função `str_word_count()`**    
*Esta função varia de acordo com o que foi definido no seu segundo parâmetro, conforme exemplos abaixo.*    
*Nota: Esta função não lida bem com palavras com acentos.*  
```php
<?php

//Retornando o número de palavras encontradas na string
print_r(str_word_count("Essa linguagem de programacao se chama PHP", 0));

# Retorna: 7


// Retornando um array contendo todas as palavras encontradas na string
print_r(str_word_count("Essa linguagem de programacao se chama PHP", 1));

/* Retorna:
Array
(
    [0] => Essa
    [1] => linguagem
    [2] => de
    [3] => programacao
    [4] => se
    [5] => chama
    [6] => PHP
)
*/

// Retornando um array com a posição em que começa cada palavra da string
print_r(str_word_count("Essa linguagem de programacao se chama PHP", 2));

/* Retorna:
Array
(
    [0] => Essa
    [5] => linguagem
    [15] => de
    [18] => programacao
    [30] => se
    [33] => chama
    [39] => PHP
)
```
&nbsp;
&nbsp;  
**22 - Gerando uma string formatada: função `printf()`**
```php
<?php  

$quantidade = 2;
$produto = "pizzas";
$preco = 90;

printf("Hoje, paguei R$ %.2f comprando %u %s.", $preco, $quantidade, $produto);

# Retorna: Hoje, paguei R$ 90.00 comprando 2 pizzas.
```
&nbsp;
&nbsp;  
**23 - Formatando um número: função `number_format()`**
```php
<?php 

$divisao = 1900/3;
echo $divisao; # Retorna: 633.33333333333 
echo number_format($divisao, 2); # Retorna: 633.33
// Nota: 1º parâmetro da função: variável; 2º: número de casas decimais a serem exibidas
	
	
$preco = 2800000;
$formatted_price = 'R$ ' . number_format($preco, 2, ',' , '.');
echo $formatted_price; # Retorna: R$ 2.800.000,00
// Nota: 1º parâmetro da função: variável; 2º: número de casas decimais a exibir; 3º: símbolo para separar casa decimal; 4º: símbolo para separar o milhar
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>