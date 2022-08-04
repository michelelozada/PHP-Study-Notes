> **Testando variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     

```php
<?php

// As variáveis para testes:
$nome = "Enzo Rossi"; 
$anoNascimento = 2010; 
$altura = 1.50; 
$notas = array(10,9.5,8.0,9.5);
$serie = '8';
$alergico = false; 
$celular = NULL;


// 1. Função isset():
// Retornará true se a variável tiver sido declarada e tiver valor diferente de NULL
var_dump(isset($nome)); # true
var_dump(isset($endereco)); # false (variável não existe/não foi configurada)
var_dump(isset($celular)); # false (variável não possui valor)


// 2. Função empty():
// Quais são os valores vazios? NULL, 0, false ou string vazia
var_dump(empty($celular)); #true


// 3. Função is_string():
if(is_string($nome)){
	echo 'Essa variável é do tipo '; 
}else{
	echo 'Essa variável não é do tipo string. É do tipo ';
}	
echo gettype($nome) . '.'; # Retorna: Essa variável é do tipo string.


if(is_string($anoNascimento)){
	echo 'Essa variável é do tipo '; 
}else{
	echo 'Essa variável não é do tipo string. É do tipo ';
}	
echo gettype($anoNascimento) . '.'; # Essa variável não é do tipo string. É do tipo integer.


// 4. Função is_int():
var_dump(is_int($anoNascimento)); # true
var_dump(is_int($altura)); # false


// 5. Função is_float():
var_dump(is_float($altura)); # true


// 6. Função is_numeric(): 
// Retornará true apenas se se tratar de um número ou de uma string numérica 
var_dump(is_numeric($altura)); # true
var_dump(is_numeric($serie)); # true


// 7. Função is_bool(): 
var_dump(is_bool($vacinado)); # true


// 8. Função is_array(): 
var_dump(is_array($notas)); # true


// 9. Função is_null():
var_dump(is_null($celular)); # true
```