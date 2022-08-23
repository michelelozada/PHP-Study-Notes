> **Tipos de variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**Integer**
```php
<?php
	
$a = 7;
echo 'Tipo da variável: ' . gettype($a) . ' | Valor da variável: ' . $a;

# Retorna: Tipo da variável: integer | Valor da variável: 7
```
&nbsp;
&nbsp;    
**Float**    
*"Por razões históricas 'double' é retornado no caso de float, e não simplesmente 'float'"* (Da documentação do PHP)
```php
<?php

$b = 10.5;
echo 'Tipo da variável: ' . gettype($b) . ' | Valor da variável: ' . $b;

# Tipo da variável: double | Valor da variável: 10.5
```
&nbsp;
&nbsp;    
**String**
```php
<?php

$c = 'Listagem das variáveis utilizadas em PHP';
echo 'Tipo da variável: ' . gettype($c) . ' | Valor da variável: ' . $c;

# Tipo da variável: string | Valor da variável: Listagem das variáveis utilizadas em PHP
```
&nbsp;
&nbsp;    
**Boolean**
```php
<?php

$d1 = true;
$d2 = false;
echo 'Tipo da variável: ' . gettype($d1) . ' | Valor da variável: ' . $d1; 
echo 'Tipo da variável: ' . gettype($d2) . ' | Valor da variável: ' . $d2;

# Tipo da variável: boolean | Valor da variável: true
# Tipo da variável: boolean | Valor da variável: false
```
&nbsp;
&nbsp;    
**Array**
```php
<?php

$e = array('a', 2, 'c', 4, 5);
echo 'Tipo da variável: ' . gettype($e);

# Tipo da variável: array
```
&nbsp;
&nbsp;     
**Object**
```php
<?php

class Aluno{
    public $nome;   
    public function obterNome($nome){
        $this->nome = $nome;
    }    
}    

$aluno1 = new Aluno();
echo 'Tipo da variável: ' . gettype($aluno1);

# Tipo da variável: object
```
&nbsp;
&nbsp;  
**NULL**
```php
<?php

$f = NULL;
echo 'Tipo da variável: ' . gettype($f);

# Tipo da variável: NULL
```