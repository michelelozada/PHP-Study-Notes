> **Conversão de tipos (casting)**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**A. Realizando a conversão de tipos**   
&nbsp;  
Converta para `array` usando `(array)`  
Converta para `bool` usando `(bool)` ou `(boolean)`  
Converta para `float` usando `(float)`, `(double)` ou `(real)`  
Converta para `int` usando `(int)` ou `(integer)`  
Converta para `NULL`usando `(unset)`   
Converta para `object` usando `(object)`  
Converta para `string` usando `(string)`  
&nbsp;
```php
$var = '100';
echo gettype($var); # Retorna: string 
$var = (int)$var;
echo gettype($var); # Retorna: integer


$nome = "Ana Maria";
$a = (int) $nome;
$b = (boolean) $nome;
echo gettype($a); # Retorna: integer
echo gettype($b); # Retorna: boolean


$x = true;
echo (int)$x; # Retorna: 1
$y = false;
echo (int)$y; # Retorna: 0
```
&nbsp;
     
&nbsp;   
**B. Utilizando a função settype() para a conversão**  
&nbsp;  
Converta para `array` usando `settype($var, "array");`  
Converta para `bool` usando `settype($var, "bool");`ou `settype($foo, "boolean");`  
Converta para `float` usando `settype($var, "float");`  
Converta para `int` usando `settype($var, "int");` ou `settype($foo, "integer");`  
Converta para `NULL` usando `settype($var, "null");`  
Converta para `object` usando `settype($var, "object");`  
Converta para `string` usando `settype($var, "string");`  
&nbsp;
```php
$var = '100';
echo gettype($var); # Retorna: string
settype($var, 'integer');
echo gettype($var); # Retorna: integer
```