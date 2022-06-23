/*
 *  Operadores de incremento e decremento
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */


<?php

//1 - Operadores de incremento
// Pós incremento
1.1 - Retorna a variável primeiro e depois a incrementa em 1 ($a++)
$a = 10;
echo '1ª impressão:' . $a++; # Retorna: 10
echo '2ª impressão:' . $a; # 11


// Pré incremento
1.2 - Incrementa a variável em 1 e depois a retorna (++$a)
$a = 10;
echo '1ª impressão:' . ++$a; # Retorna: 11
echo '2ª impressão:' . $a; # 11


//2 - Operadores de decremento
// Pós decremento
2.2 - Retorna a variável primeiro e depois a decrementa em 1 ($a--)
$a = 10;
echo '1ª impressão:' . $a--; # Retorna: 10
echo '2ª impressão:' . $a; # 9

2.2 - Retorna a variável e depois decrementa em 1 (--$a)
echo '1ª impressão:' . --$a; # Retorna: 9
echo '2ª impressão:' . $a; # 9