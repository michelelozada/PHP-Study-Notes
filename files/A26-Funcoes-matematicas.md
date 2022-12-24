> **Funções matemáticas**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*        
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**1 - Calculando uma base elevada à potência do expoente: função `pow()`**
```php	
<?php 

echo pow(2,3); # Retorna: 8
```	
&nbsp;
&nbsp;  
		
**2 - Calculando a raiz quadrada de um dado valor: função `sqrt()`**
```php	
<?php 

echo sqrt(25); # 5
```
&nbsp;
&nbsp;  
**3 - Retornando somente a parte inteira de uma variável: função `intval()`**
```php	
<?php 

echo intval(3.14); # 3
```	
&nbsp;
&nbsp;  
**4 - Arredondando valores para cima: função `ceil()`**  
```php	
<?php 

$preco1 = 250.30;
$preco2 = 257.55;

echo ceil($preco1);  # 251
echo ceil($preco2);  # 258
```
&nbsp;
&nbsp;  
**5 - Arredondando valores para baixo: função `floor()`** 
```php	
<?php 

$preco1 = 250.30;
$preco2 = 257.55;

echo floor($preco1); # 250
echo floor($preco2); # 257
```	
&nbsp;
&nbsp;  
**6 - Arredondando um número float: função `round()`**
```php	
<?php 

$preco1 = 250.30;
$preco2 = 257.55;

echo round($preco1); # 250
echo round($preco2); # 258
```	
&nbsp;
&nbsp;  
**7 - Retornando o valor absoluto de um número: função `abs()`**
```php	
<?php 

echo abs(-10); # 10
echo abs(-5.5); # 5.5
```		
&nbsp;
&nbsp;  
**8 - Gerando um número inteiro aleatório: função `rand()`**
```php	
<?php 

echo rand();
# 1ª saída: 1927646153 | 2ª saída: 513050103 | 3ª saída: 118736831
		
// Gerando um número inteiro aleatório, porém dentro de um intervalo
echo rand(1,10);
# 1ª saída: 6 | 2ª saída: 9 | 3ª saída: 3
```