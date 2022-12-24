> **Escopo de variáveis**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**Escopo** diz respeito ao contexto em que uma variável foi definida e como ela pode ser acessada.   
&nbsp;    
Dessa forma, uma variável pode ser de **escopo global** ou, senão, de **escopo local**, sendo que esta última somente poderá ser acessada 
dentro da função/método onde ela foi declarada.   
&nbsp; 
Para que uma função possa acessar uma variável de fora de seu escopo é necessária a utilização da keyword `global`, conforme exemplos abaixo.
&nbsp;
     
&nbsp;      
**Situação #1**
```php
<?php  

$a = 1;  // Essa é uma variável de escopo global

function verifica(){
	$a = 3;  // Essa é uma variável de escopo local
	echo $a; 
}	

echo $a; # Retorna: 1
verifica(); # 3 
echo $a; # 1
```
&nbsp;
&nbsp;    

**Situação #2**
```php
<?php  

$a = 1; 

function verifica(){
	global $a;  // Aqui a definição para que esta variável seja de escopo global
	$a++;
	echo $a; 
}	

echo $a; # Retorna: 1
verifica(); # 2
echo $a; # 2
```
&nbsp;
&nbsp;    
**Situação #3**
```php
<?php  

$a = 1;

function verifica(){
	$a = 3;
	global $a;
	echo $a; 
}	

echo $a; # Retorna: 1
verifica(); # 1
echo $a; # 1
```
&nbsp;
&nbsp;    
**Situação #4**
```php
<?php  

$a = 1; 

function verifica(){
    global $a;  
    $a = 2; 
    echo $a;
}

echo $a; # Retorna: 1
verifica(); # 2
echo $a; # 2
```
&nbsp;
&nbsp;    
**Situação #5**
```php
<?php  

$a = 1;
$b = 2;

function soma(){
	$a = 4;
	$b = 6;
	echo $a + $b; 
}

soma(); # Retorna: 10
```
&nbsp;
&nbsp;    
**Situação #6**
```php
<?php  

$a = 1;
$b = 2;

function soma(){
	$a = 4;
	$b = 6;
	global $a, $b;  // *ver nota abaixo
	echo $a + $b;  //*ver nota abaixo
}

soma(); # Retorna: 3

//(*) Obs: as duas linhas acima destacadas poderiam ser substituídas por: echo $GLOBALS['a'] + $GLOBALS['b'];
```
