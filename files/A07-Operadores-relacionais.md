> **Operadores relacionais**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;      
**1 - Igual a (`==`)**
```php
<?php 

echo(4 == 4.0);  # Retorna: true
echo(4 == '4');  # true
```
&nbsp;
&nbsp;    
**2 - Diferente de (`<>` ou `!=`)**
```php
<?php 

echo(4 <> 5.0);  # Retorna: true
echo(4 != '4'); # false
```
&nbsp;
&nbsp;    
**3 - Idêntico a (`===`)**
```php
<?php 

echo(4 === 4);  # Retorna: true
echo(4 === '4'); # false
```
&nbsp;
&nbsp;    
**4 - Não idêntico a (`!==`)**
```php
<?php 

echo(4 !== 4);  # Retorna: false
echo(4 !== '4'); # true
```
&nbsp;
&nbsp;    
**5 - Menor que (`<`)**
```php
<?php 

echo(2.5 < 10); # Retorna: true
```
&nbsp;
&nbsp;    
**6 - Maior ou igual a (`>=`)**
```php
<?php 

echo(5 >= 13); # Retorna: false
echo(5.0 >= 5); # true
```
&nbsp;
&nbsp;    
**7 - Menor ou igual a (`<=`)**
```php
<?php 

echo(10 <= 5); # Retorna: false
echo(10 <= 10.0); # true
```
&nbsp;
&nbsp;    
**8 - Operador spaceship (`<=>`)**  
*"O operador spaceship é utilizado para comparar duas expressões. Ele retorna -1, 0 ou 1 quando $a for respectivamente
menor que, igual a ou maior que $b. As comparações são feitas de acordo com as já conhecidas regras de comparação de
tipos do PHP"*. (Da documentação do PHP)
```php
<?php 

echo(1 <=> 1); # Retorna: 0
echo(1 <=> 2); # -1
echo(2 <=> 1); # 1

echo 'a' <=> 'a'; # Retorna: 0
echo 'a' <=> 'b'; # -1
echo 'b' <=> 'a'; # 1
```
&nbsp;
&nbsp;    
**9 - Comparando strings**
```php
<?php 

echo('bom' < 'dia'); # Retorna: true
echo('bom' == 'dia'); # false
echo('bom' > 'dia'); # false
echo('dia' == 'dia'); # true
```
&nbsp;
&nbsp;    
**10 - Outro exemplo**
```php
<?php 

$a = 5; 
$b = '5'; 

if($a == $b):  
    echo 'As duas variáveis têm valores iguais, ';
	if($a === $b): 
		echo 'assim como têm tipos também iguais; são, portanto, variáveis idênticas.';
	else:
		echo 'mas têm tipos diferentes; portanto não são variáveis idênticas.';
	endif; 
else:
	echo 'As duas variáveis têm valores diferentes.';
endif; 

# Retorna: As duas variáveis têm valores iguais, mas têm tipos diferentes; portanto não são variáveis idênticas.
```