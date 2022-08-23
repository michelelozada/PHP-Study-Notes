> **Testando variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Verificando se uma variável foi definida: função `isset()`:**  
*Retornará true se a variável tiver sido declarada e tiver valor diferente de NULL*
```php
<?php

$nome = "Enzo Rossi"; 
$celular = NULL;

var_dump(isset($nome));  # Retorna: true
var_dump(isset($endereco));  # Retorna: false (variável não existe/não foi configurada)
var_dump(isset($celular));  # Retorna: false (variável não possui valor)
```
&nbsp;
&nbsp;  
**2. Verificando se uma variável é vazia: função `empty()`**  
*Quais são os valores vazios? NULL, 0, false ou string vazia*
```php
<?php

$celular = NULL;

var_dump(empty($celular));  # Retorna: true
```
&nbsp;
&nbsp;  
**3. Verificando se uma variável é do tipo string: função `is_string()`**
```php
<?php

$nome = "Enzo Rossi"; 
$anoNascimento = 2010; 

if(is_string($nome)):
	echo 'Essa variável é do tipo '; 
else:
	echo 'Essa variável não é do tipo string. É do tipo ';
endif;
echo gettype($nome) . '.'; 

# Retorna: Essa variável é do tipo string.


if(is_string($anoNascimento)):
	echo 'Essa variável é do tipo '; 
else:
	echo 'Essa variável não é do tipo string. É do tipo ';
endif;	
echo gettype($anoNascimento) . '.'; 

# Retorna: Essa variável não é do tipo string. É do tipo integer.
```
&nbsp;
&nbsp;  
**4. Verificando se uma variável é do tipo inteiro: função `is_int()`**
```php
<?php

$anoNascimento = 2010; 
$altura = 1.50; 

var_dump(is_int($anoNascimento));  # Retorna: true
var_dump(is_int($altura));  # Retorna: false
```
&nbsp;
&nbsp;  
**5. Verificando se uma variável é do tipo float: função `is_float()`**
```php
<?php

$altura = 1.50; 

var_dump(is_float($altura));  # Retorna: true
```
&nbsp;
&nbsp;  
**6. Verificando se uma variável é um número ou uma string numérica: função `is_numeric()`**   
*Retornará true apenas se se tratar de um número ou de uma string numérica*
```php
<?php

$altura = 1.50; 
$serie = '8';

var_dump(is_numeric($altura));  # Retorna: true
var_dump(is_numeric($serie));  # Retorna: true
```
&nbsp;
&nbsp;  
**7. Verificando se uma variável é do tipo boolean: função `is_bool()`** 
```php
<?php

$alergico = false; 

var_dump(is_bool($alergico));  # Retorna: true
```
&nbsp;
&nbsp;  
**8. Verificando se uma variável é um array: função `is_array()`** 
```php
<?php

$notas = array(10,9.5,8.0,9.5);

var_dump(is_array($notas));  # Retorna: true
```
&nbsp;
&nbsp;  
**9. Verificando se uma variável é um objeto: função `is_object()`**
```php
<?php

class Aluno{
    public $nome;   
    public function obterNome($nome){
        $this->nome = $nome;
    }    
}    

$aluno1 = new Aluno();

var_dump(is_object($aluno1));  # Retorna: true
```
&nbsp;
&nbsp;  
**10. Verificando se uma variável é null: função `is_null()`**
```php
<?php

$celular = NULL;

var_dump(is_null($celular));  # Retorna: true
```