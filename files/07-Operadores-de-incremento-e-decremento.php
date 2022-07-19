/*
 *  Operadores de incremento e decremento
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */


<?php

//1 - Operadores de incremento

// Pré-incremento
1.1 - Incrementa a variável em 1 e a retorna imediatamente (++$a)
$a = 8;
$b = ++$a;
echo $a;  # Retorna: 9
echo $b; # 9
$b += 5;
echo $b; #14

// Pós-incremento
1.2 - Retorna a variável primeiro e depois a incrementa em 1 ($a++)
$a = 8;
$b = $a++;
echo $a;  # Retorna: 9
echo $b; # 8
$b += 5;
echo $b; # 13


//2 - Operadores de decremento
// Pré-decremento
2.1 - Decrementa a variável em 1 e a retorna imediatamente  (--$a)
$a = 8;
$b = --$a;
echo $a; # Retorna: 7
echo $b; # 7
$b -= 5;
echo $b; #2

// Pós-decremento
2.2 - Retorna a variável primeiro e depois a decrementa em 1 ($a--)
$a = 8;
$b = $a--;
echo $a; # Retorna: 7
echo $b; # 8
$b -= 5;
echo $b; # 3



// 3 - Incrementando letras
$x = "a"; 
echo $x++; # Retorna: a
echo $x++; # b
echo $x++; # c
echo $x++; # d
echo $x++; # e