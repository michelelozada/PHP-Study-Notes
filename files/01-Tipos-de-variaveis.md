> **Tipos de variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// Retorne quais os tipos das variáveis apresentadas abaixo:

$a = 7;
echo 'Tipo da variável: ' . gettype($a) . ' | Valor da variável: ' . $a;
# Retorna: Tipo da variável: integer | Valor da variável: 7


$b = 10.5;
echo 'Tipo da variável: ' . gettype($b) . ' | Valor da variável: ' . $b;
# Tipo da variável: double | Valor da variável: 10.5
# "Por razões históricas 'double' é retornado no caso de float, e não simplesmente 'float'" (Da documentação do PHP)


$c = 'Listagem das variáveis utilizadas em PHP';
echo 'Tipo da variável: ' . gettype($c) . ' | Valor da variável: ' . $c;
# Tipo da variável: string | Valor da variável: Listagem das variáveis utilizadas em PHP


$d1 = true;
$d2 = false;
echo 'Tipo da variável: ' . gettype($d1) . ' | Valor da variável: ' . $d1; 
echo 'Tipo da variável: ' . gettype($d2) . ' | Valor da variável: ' . $d2;
# Tipo da variável: boolean | Valor da variável: true
# Tipo da variável: boolean | Valor da variável: false


$e = array('a', 2, 'c', 4, 5);
echo 'Tipo da variável: ' . gettype($e);
# Tipo da variável: array


$f = NULL;
echo 'Tipo da variável: ' . gettype($f);
# Tipo da variável: NULL
```