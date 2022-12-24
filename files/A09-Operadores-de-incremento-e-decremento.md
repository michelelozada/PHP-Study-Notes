> **Operadores de incremento e decremento**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1 - Operadores de incremento**  
&nbsp;  
**1.1 - Pré-incremento**   
O operador `++` está posicionado antes da variável e o incremento ocorre imediatamente  
```php
<?php

$a = 10;
echo '1ª impressão:' . ++$a; # Retorna: 1ª impressão:11
echo '2ª impressão:' . $a; # 2ª impressão:11


$a = 10;
$b = 4;
$a = ++$b;
echo $a; # Retorna: 5
echo $b; # 5
```
&nbsp;
&nbsp;    
**1.2 - Pós-incremento**  
O operador `++` está posicionado depois da variável, sendo que o incremento ocorre apenas ao final da instrução.
```php
<?php

$a = 10;
echo '1ª impressão: ' . $a++; # Retorna: 1ª impressão: 10
echo '2ª impressão: ' . $a; # 2ª impressão: 11


$a = 3;
$b = 3;
$a = 2 * $b++;
echo $a; # Retorna: 6 
echo $b; # 4
```
&nbsp;
&nbsp;  
**2 - Operadores de decremento**  
&nbsp;  
**2.1 - Pré-decremento**  
O operador `--` está posicionado antes da variável e o decremento ocorre imediatamente
```php
<?php

$a = 10;
echo '1ª impressão: ' . --$a; # Retorna: 1ª impressão: 9
echo '2ª impressão: ' . $a; # 2ª impressão: 9


$a = 8;
$b = --$a;
echo $a; # Retorna: 7
echo $b; # 7


$a = 4;
$b = 10;
$b = --$a;
echo $a; # 3
echo $b; # 3
```
&nbsp;
&nbsp;  
**2.2 - Pós-decremento**  
O operador `--` está posicionado depois da variável, sendo que o decremento ocorre apenas ao final da instrução.
```php
<?php

$a = 10;
echo '1ª impressão: ' . $a--; # 1ª impressão: 10
echo '2ª impressão: ' . $a; # 2ª impressão: 9


$a = 8;
$b = $a--;
echo $a; # Retorna: 7
echo $b; # 8
```
&nbsp;
&nbsp;  
**3 - Incrementando letras**
```php
<?php

$x = "a"; 
echo $x++; # Retorna: a
echo $x++; # b
echo $x++; # c
echo $x++; # d
echo $x++; # e
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>