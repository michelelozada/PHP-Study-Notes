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
&nbsp;
&nbsp;     
**Atribuição por referência**  

"O PHP também oferece um outro meio de atribuir valores a variáveis: **atribuição por referência**. Isto significa que a nova variável simplesmente referencia (em outras palavras, "torna-se um apelido para" ou "aponta para") a variável original. Alterações na nova variável afetam a original, e vice-versa.  (…) Para atribuir por referência, simplesmente adicione um e-comercial (&) na frente do nome da variável que estiver sendo atribuída (variável de origem)." *– Da documentação do PHP*  
&nbsp;
```php
$a = 'Enéas';          
$b = &$a;   # Aqui $a e $b passam a estar ligados por referência
echo "Meu nome é $b";   # Retorna: Meu nome é Enéas
$b = 'Ernani';   
echo "Meu nome é $a";  # Retorna: Meu nome é Ernani
```
&nbsp;
&nbsp;     
**Variáveis variáveis**  

"Às vezes, é conveniente possuir variáveis com nomes variáveis. Isto é, o nome de uma variável que pode ser definido e utilizado dinamicamente.  (…) Uma variável variável obtém o valor de uma variável e a trata como o nome de uma variável." *– Da documentação do PHP*
&nbsp;
```php
$a = 'boa';
$$a = 'tarde';

echo $a . ' ' . $boa . '!'; # Retorna: boa tarde!

$$a = 'noite';
echo $a . ' ' . $boa . '!'; # Retorna: boa noite!
```