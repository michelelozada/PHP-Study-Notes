> **Operadores de atriubuição**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Atribuição simples `(=)`**
```php
<?php
	
$a = 2;
echo($a); # Retorna: 2
```
&nbsp;
&nbsp;       
**2. Atribuição de adição `(+=)`**
```php
<?php

$a += 1;  # (equivalente: $a = $a + 1)
echo($a);  # 3
```
&nbsp;
&nbsp;    
**3. Atribuição de subtração `(-=)`**
```php
<?php

$a -= 1;  # (equivalente: $a = $a - 1)
echo($a);  # 2
```
&nbsp;
&nbsp;    
**4. Atribuição de  multiplicação `(*=)`**
```php
<?php

$a *= 2;  # (equivalente: $a  = $a * 2)
echo($a);  # 4
```
&nbsp;
&nbsp;    
**5. Atribuição de divisão `(/=)`**
```php
<?php

$a /= 2;  # (equivalente: $a  = $a / 2)
echo($a);  # 2
```
&nbsp;
&nbsp;     
**6. Atribuição exponencial `(**=)`**
```php
<?php

$a = 5;
$a **= 2;
echo($a);  # 25
```
&nbsp;
&nbsp;    
**7. Atribuição de módulo/resto da divisão `(%=)`**
```php
<?php

$a %= 5;
echo($a); # 0
```
&nbsp;
&nbsp;    
**8. Atribuição com concatenação `(.=)`**
```php
<?php

$a = 'Hello ';
$a .= 'World!';
echo $a; # Hello World!
```
&nbsp;
&nbsp;    
**9. Atribuição por referência**  

"O PHP também oferece um outro meio de atribuir valores a variáveis: **atribuição por referência**. Isto significa que a nova variável simplesmente referencia (em outras palavras, "torna-se um apelido para" ou "aponta para") a variável original. Alterações na nova variável afetam a original, e vice-versa.  (…) Para atribuir por referência, simplesmente adicione um e-comercial (&) na frente do nome da variável que estiver sendo atribuída (variável de origem)." *– Da documentação do PHP*  
```php
<?php  

$a = 'Enéas';          
$b = &$a;   # Aqui $a e $b passam a estar ligados por referência
echo "Meu nome é $b";   # Retorna: Meu nome é Enéas
$b = 'Ernani';   
echo "Meu nome é $a";  # Retorna: Meu nome é Ernani
```
&nbsp;
&nbsp;      
**10. Variáveis variáveis**  

"Às vezes, é conveniente possuir variáveis com nomes variáveis. Isto é, o nome de uma variável que pode ser definido e utilizado dinamicamente.  (…) Uma variável variável obtém o valor de uma variável e a trata como o nome de uma variável." *– Da documentação do PHP*
```php
<?php  

$massa = 'lasagna';
$$massa = 'Lasagna 4 queijos';  # o nome desta variável, criada dinêmicamente, é $lasagna
echo $massa; # Retorna: lasagna
echo $lasagna;  # Retorna: Lasagna 4 queijos

$destino = "cidade";
$$destino = "Curitiba"; # esta é a variável diNãmica
echo $cidade; # Retorna: Curitiba
```