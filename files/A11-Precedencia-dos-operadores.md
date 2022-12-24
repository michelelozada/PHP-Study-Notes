> **Precedência dos operadores**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**Precedência dos operadores**  
&nbsp;
&nbsp;    
Seguem abaixo os principais operadores, estando os de maior precedência no topo.
&nbsp;
&nbsp;    

| **Categoria**         | **Operadores**               | **Associatividade**   |
| :--                   | :--                          | :--                   |
| lógicos               | `!`                          | direita para esquerda |
| incremento/decremento | `++` `--`                    | direita para esquerda |
| aritméticos           | `*`  `/` `%`                 | esquerda para direita |
| aritméticos e string  | `+` `-` `.`                  | esquerda para direita |
| comparação            | `<` `<=` `>` `>=`            | não associativo       |
| comparação            | `==` `!=` `===` `!==`        | não associativo       |
| lógicos               | `&&`                         | esquerda para direita |
| lógicos               | `\|\|`                       | esquerda para direita |
| condicional           | `?:`                         | esquerda para direita |  
| atribuição            | `=` `+=` `-=` `*=` `/=` `%=` | direita para esquerda |
| lógicos               | `and`                        | esquerda para direita |
| lógicos               | `xor`                        | esquerda para direita |
| lógicos               | `or`                         | esquerda para direita |

&nbsp;
```php
<?php  

$a = 10;
$b = 50;
$c = 2;
$p = true;
$q = false;

echo ($b + $a) /$c;  # Retorna: 30
echo ++$a * $c;  # 22
echo ($a < 5) && $b != 50;  # false
echo $p || $q && !$q;  # true
echo $b % $a + $a;  # 10
```