> **Operadores aritméticos**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Adição**  
```php
<?php

$a = 4;
$b = 2;
	
echo $a + $b;  # Retorna: 6
```
&nbsp;
&nbsp;    
**2. Subtração**
```php
<?php

$a = 4;
$b = 2;
	
echo $a - $b;  # 2
```
&nbsp;
&nbsp;  
**3. Multiplicação**  
```php
<?php

$a = 4;
$b = 2;
	
echo $a * $b;  # 8
```
&nbsp;
&nbsp;  
**4. Divisão**   
*O operador de divisão ("/") sempre retorna um valor com ponto flutuante, a não ser que os dois operandos 
sejam inteiros (ou strings que são convertidas para inteiros) e números inteiramente divisíveis, nesse caso
um inteiro é retornado. Para divisão de inteiros, veja `intdiv()`.* (Da documentação do PHP)
```php
<?php

$a = 4;
$b = 2;
	
echo $a / $b;  # 2
```
&nbsp;
&nbsp;  
**6. Módulo**  
*Operandos de módulo são convertidos para inteiros (removendo a parte decimal) antes do processamento. Para
módulos de ponto flutuante, veja `fmod()`.* (Da documentação do PHP)
```php
<?php

$a = 4;
$b = 2;
	
echo $a % $b;  # 0 
```
&nbsp;
&nbsp;  

**7. Exponencial**
```php
<?php

$a = 4;
$b = 2;
	
echo $a ** $b; # 16
```
&nbsp;
&nbsp;  

**8. Negação**   
*Retorna o oposto/inverte o valor de uma variável*
```php
<?php

$a = 4;
$b = 2;

echo -$a;  # -4
echo -$b;  # -2
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>