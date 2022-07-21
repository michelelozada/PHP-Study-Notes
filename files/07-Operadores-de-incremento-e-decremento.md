> **Operadores de incremento e decremento**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php

// 1 - Operadores de incremento

// 1.1 - Pré-incremento 
// O operador ++ está posicionado antes da variável e o incremento ocorre imediatamente
$a = 10;
echo '1ª impressão:' . ++$a; # Retorna: 1ª impressão: 11
echo '2ª impressão:' . $a; # 11

$a = 10;
$b = 4;
$a = ++$b;
echo $a; # Retorna: 5
echo $b; # 5

// 1.2 - Pós-incremento
// O operador ++ está posicionado depois da variável, sendo que o incremento ocorre apenas ao final da instrução.
$a = 10;
echo '1ª impressão: ' . $a++; # Retorna: 1ª impressão: 10
echo '2ª impressão: ' . $a; # 2ª impressão: 11

$a = 3;
$b = 3;
$a = 2 * $b++;
echo $a; # Retorna: 6 
echo $b; # 4


//2 - Operadores de decremento

// 2.1 - Pré-decremento
// O operador -- está posicionado antes da variável e o decremento ocorre imediatamente
$a = 10;
echo '1ª impressão:' . --$a; # Retorna: 9
echo '2ª impressão:' . $a; # 9 

$a = 8;
$b = --$a;
echo $a; # Retorna: 7
echo $b; # 7

$a = 4;
$b = 10;
$b = --$a;
echo $a; # 3
echo $b; # 3

// 2.2 -  Pós-decremento
// O operador -- está posicionado depois da variável, sendo que o decremento ocorre apenas ao final da instrução.
echo '1ª impressão: ' . $a--; # 1ª impressão: 10
echo '2ª impressão: ' . $a; # 2ª impressão: 9

$a = 8;
$b = $a--;
echo $a; # Retorna: 7
echo $b; # 8


// 3 - Incrementando letras
$x = "a"; 
echo $x++; # Retorna: a
echo $x++; # b
echo $x++; # c
echo $x++; # d
echo $x++; # e
```