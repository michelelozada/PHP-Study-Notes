> **Funções de string**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**1 - Retornando a quantidade de caracteres (com espaços) de uma string: função `strlen()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade'; 
echo strlen($citacao); # Retorna: 69
```
&nbsp;
&nbsp;    
**2 - Contando o número ocorrências de uma substring dentro da string: função `substr_count()`**
```php	
<?php 

// Att! Case-sensitive
$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo substr_count($citacao,'passo'); # 2
```
&nbsp;
&nbsp;   
**3 - Retornando a primeira ocorrência de uma letra na string: função `stripos()`** 
```php	
<?php 

// Obs: Case-insensitive
$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo stripos($citacao,'o'); # 9
```
&nbsp;
&nbsp;   
**4 - Retornando a última ocorrência de uma letra na string: função `strripos()`** 
```php	
<?php 

// Obs: Case-insensitive
$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strripos($citacao,'o'); # 50
```
&nbsp;
&nbsp;   
**5 - Convertendo uma string para minúsculas: função `strlower()`** 
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strtolower($citacao); 
# um pequeno passo para o homem, um gigantesco passo para a humanidade
```
&nbsp;
&nbsp;   
**6 - Convertendo uma string para maiúsculas: função `strtoupper()`** 
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo strtoupper($citacao); 
# UM PEQUENO PASSO PARA O HOMEM, UM GIGANTESCO PASSO PARA A HUMANIDADE
```
&nbsp;
&nbsp;   
**7 - Retornando uma string com seu primeiro caractere maiúsculo: função `ucfirst()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo ucfirst($citacao);
# Um pequeno passo para o Homem, um gigantesco passo para a Humanidade
```
&nbsp;
&nbsp;   
**8 - Retornando uma string com o primeiro caractere de cada palavra em maiúsculo: função `ucwords()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo ucwords($citacao);
# Um Pequeno Passo para O Homem, Um Gigantesco Passo Para A Humanidade
```
&nbsp;
&nbsp;    
**9 - Substituindo todas as ocorrências da string de procura com a string de substituição: função `str_replace()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
replace ('um gigantesco passo para a Humanidade','one giant leap for Mankind',$citacao);
# um pequeno passo para o Homem, one giant leap for Mankind
```
&nbsp;
&nbsp;   
**10 - Retornando determinada parte da string: função `substr()`**
```php	
<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade';
echo substr($citacao,31); # um gigantesco passo para a Humanidade
echo substr($citacao,-12); # a Humanidade
echo substr($citacao,-34,16); # gigantesco passo
```
&nbsp;
&nbsp;   
**11 - Formatação de um número: função `number_format()`**
```php
<?php 

$divisao = 1900/3;
echo $divisao; # Retorna: 633.33333333333 
echo number_format($divisao, 2); # 633.33
// 1º parâmetro da função: variável; 2º: número de casas decimais a exibir
	
$preco = 2800000;
$formatted_price = 'R$ ' . number_format($preco, 2, ',' , '.');
// 1º parâmetro da função: variável; 2º: número de casas decimais a exibir; 3º: símbolo para separar casa decimal; 4º: símbolo para separar o milhar
echo $formatted_price; # Retorna: R$ 2.800.000,00
```