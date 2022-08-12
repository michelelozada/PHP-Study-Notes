> **Funções para manipulação de variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
**1 - Imprimindo informações sobre uma variável: função `print_r()`**
```php
<?php  
	
$x[0] = 10;
$x[1] = 20;
$x[2] = 40;

print_r($x);

# ou  

$x = [10,20,40];
print_r($x);


/* Irão retornar:
Array
(
    [0] => 10
    [1] => 20
    [2] => 40
)
*/
````
&nbsp;
&nbsp;  
**2 - Imprimindo informações sobre uma variável: função `var_dump()`**  
*Obs: Em caso de array, serão informados a quantidade de elementos, os elementos e seus respectivos tipos.*
```php
<?php 
	
$x = array(10,10.5,20,array('x','y','z'));
var_dump($x);

/* Retorna:
array(4) {
  [0]=>
  int(10)
  [1]=>
  float(10.5)
  [2]=>
  int(20)
  [3]=>
  array(3) {
    [0]=>
    string(1) "x"
    [1]=>
    string(1) "y"
    [2]=>
    string(1) "z"
  }
}
*/
```