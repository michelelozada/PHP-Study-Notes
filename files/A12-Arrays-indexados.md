> **Arrays indexados**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;      
**1 - Criando um array indexado**  
```php
<?php

$emptyArray = array();
$numberArray = array(1,2,3,4,5);

# Sintaxe alternativa para criação de arrays (notação JSON):
$emptyArray = [];
$numberArray = [1,2,3,4,5];
```
&nbsp;
&nbsp;     
**2 - Exibindo o conteúdo de um array**  
&nbsp;  
**2.1 - Via função `print_r`**  
```php
<?php

$frutas = array('amora','laranja','banana','uva');
print_r ($frutas);	
/* Retorna:
Array
(
    [0] => amora
    [1] => laranja
    [2] => banana
    [3] => uva
)
*/
```
&nbsp;  
**2.2 - Via função `var_dump()`**
```php
<?php

$frutas = array('amora','laranja','banana','uva');
var_dump($frutas);
/* Retorna:
array(4) {
  [0]=>
  string(5) "amora"
  [1]=>
  string(7) "laranja"
  [2]=>
  string(6) "banana"
  [3]=>
  string(3) "uva"
}
*/
```
&nbsp;  
**2.3 - Via estrutura `foreach()`**  
```php
<?php

$frutas = array('amora','laranja','banana','uva');
foreach ($frutas as $fruit) {
    echo $fruit . ' ';
}
# Retorna: amora laranja banana uva 

$frutas = array('amora','laranja','banana','uva');
foreach ($frutas as $key => $value) {
    echo "[" . $key . "]" . ' ' . $value . "\n";
}
/* Retorna: 
[0] amora
[1] laranja
[2] banana
[3] uva
*/
```
&nbsp;
&nbsp;   
**3 - Acessando elementos de um array indexado**  
```php
<?php

$frutas = array('amora','laranja','banana','uva');
echo $frutas[0]; # Retorna: amora
echo $frutas[1]; # laranja
echo $frutas[3]; # uva
```
&nbsp;
&nbsp;  
**4 - Inserindo novos elementos na última posição do array**  
```php
<?php

$frutas = array('amora','laranja','banana');
$frutas[] = 'morango';
$frutas[] = 'melancia';
print_r($frutas);
/* Retorna:
Array
(
    [0] => amora
    [1] => laranja
    [2] => banana
    [3] => morango
    [4] => melancia
)
*/
```
&nbsp;
&nbsp;   
**5 - Substituindo elementos de um array**  
```php
<?php

$frutas = array('amora','laranja','banana');
$frutas[0] = 'tangerina';
$frutas[3] = 'cereja';
print_r($frutas);
/* Retorna:
Array
(
    [0] => tangerina
    [1] => laranja
    [2] => banana
    [3] => cereja
)
*/
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>