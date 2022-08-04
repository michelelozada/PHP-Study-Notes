> **Operadores de atriubuição**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// 1. Atribuição simples
$a = 2;
echo($a); # Retorna: 2


// 2. Atribuição de adição
$a += 1;  # (equivalente: $a = $a + 1)
echo($a);  # 3


// 3. Atribuição de subtração
$a -= 1;  # (equivalente: $a = $a - 1)
echo($a);  # 2


// 4. Atribuição de  multiplicação
$a *= 2;  # (equivalente: $a  = $a * 2)
echo($a);  # 4


// 5. Atribuição de divisão
$a /= 2;  # (equivalente: $a  = $a / 2)
echo($a);  # 2


// 6. Atribuição exponencial
$a = 5;
$a **= 2;
echo($a);  # 25


// 7. Atribuição de módulo/resto da divisão
$a %= 5;
echo($a); # 0


// 8. Atribuição com concatenação
$a = 'Hello ';
$a .= 'World!';
echo $a; # Hello World!


// 9. Atribuição por referência
$a = 3;
$b = &$a; # $b agora é uma referência de $a
echo $b; # Retorna: 3
$a = 8;
echo $b; # 8
```