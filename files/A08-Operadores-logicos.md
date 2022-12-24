> **Operadores lógicos**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;      
**1. Operador 'AND' (`&&` ou `and`)**  
Tem seu valor lógico verdadeiro somente se todas as proposições forem verdadeiras.  
Obs: O operador `&&` opera com maior precedência sobre o operador `and`.  
```php
<?php

echo true && true;   # Retorna: true
echo true && false;  # false
echo false && true;  # false
echo false && false; # false
```	
&nbsp;
&nbsp;    
**2. Operador 'OR' (`||` ou  `or`)**  
Tem seu valor lógico verdadeiro quando ao menos uma das proposições for verdadeira.     	 
Obs: O operador `||` opera com maior precedência sobre o operador `or`.  
```php
<?php

echo true || true;   # Retorna: true
echo true || false;  # true
echo false || true;  # true
echo false || false; # false
```	
&nbsp;
&nbsp;    
**3. Operador 'NOT' (`!`)**  
Tem o efeito de negar o valor lógico da proposição original.    
```php
<?php

echo !true;  # Retorna: false
echo !false; # true
```	
&nbsp;
&nbsp;    
**4. Operador 'XOR' (`xor`)**  
Tem seu valor lógico verdadeiro se apenas uma proposição for verdadeira.     
Se duas proposições forem verdadeiras ou se não houver proposição verdadeira, retorna *false*.  
```php
<?php

echo true xor true;   # Retorna: false
echo true xor false;  # true
echo false xor true;  # true
echo false xor false; # false
```	
&nbsp;
&nbsp;    
**5. Expressões lógicas diversas:**
```php
<?php
echo (3 < 2) && (2 == 2);  # Retorna: false
echo (1 + 1 == 2) && (strlen("bola") == 4);  # true
echo (1 + 1 > 2) && (4 != 5);  # false
echo (true || false) && true;  # true
echo (true && false) && true;  # false

echo (2 > 1) || (3 < 7);  # Retorna: true
echo (1 + 1 == 2) || (strlen("bola") == 4);  # true
echo (1 + 1 != 2) || (strlen("bola") == 4);  # true
echo (true || false) || true;  # true
echo (true && false) || true;  # true

echo !(3 > 2);  # Retorna: false
echo !(7 < 5);  # true
echo !(4 <> 2) && (3 < 6);  # false
echo !true || false;  # false
echo !true || true;   # true
echo !false || true;  # true
echo !true && false;  # false
```	
&nbsp;
&nbsp;    
**6. Outros exemplos:**
```php
<?php

$idade = 19;
$carteiraCNH = false;

if($idade >= 18 && $carteiraCNH == true):
    echo 'Parabéns, você já pode dirigir!';   
elseif ($idade >= 18 && $carteiraCNH == false):
    echo 'Você já tem idade para solicitar a CNH, porém não a tem; portanto, ainda não pode dirigir.';   
else:
	echo 'Você ainda não tem idade mínima para tirar a CNH, então não pode dirigir.'; 
endif;

# Retorna: Você já tem idade para solicitar a CNH, porém não a tem; portanto, ainda não pode dirigir
```
&nbsp;    
```php
<?php

$gestante = true;
$idade = 26;

if ($gestante == true || $idade >= 60):
    echo 'Liberar senha para atendimento preferencial.';
else:
    echo 'Liberar senha para atendimento padrão.';
endif;

# Retorna: Liberar senha para atendimento preferencial.
```
&nbsp;    
```php
<?php

$comprovanteVacina = true;

if($comprovanteVacina):  # A condição ao lado é equivalente a: if($comprovanteVacina == true)
	echo 'Entrada permitida.';		
else:
	echo 'Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.';
endif;

# Retorna: Entrada permitida.
```
&nbsp;    
```php
<?php

$comprovanteVacina = true;

if(!$comprovanteVacina):  # A condição ao lado é equivalente a: if($comprovanteVacina != true)
	echo 'Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.';		
else:
	echo 'Entrada permitida.';	
endif;	

# Retorna: Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.
```