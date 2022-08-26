> **Estrutura de controle - If else e operador ternário**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**Utilizando a estrutura `if-else`:** 
```php
<?php

$media = 65;

if($media >= 70)
{
	$status = 'Aluno(a) foi aprovado(a) no curso.';
} 
else 
{
	$status = 'Aluno(a) terá de realizar o exame final.';
}
echo 'Status: ' . $status;	

# Retorna: Status: Aluno(a) terá de realizar o exame final.
```
&nbsp;    
**Sintaxe alternativa para estrutura de controle `if-else`:**
```php
<?php

$n1 = 10;
$n2 = 20;
 
if($n1>$n2):
    echo "$n1 é maior que $n2";
else:
    echo "$n2 é maior que $n1";
endif;

# Retorna: 20 é maior que 10
```
&nbsp;    
**Utilizando o operador ternário:**
```php
<?php

$media = 65;

$status = ($media >= 70) ? 'aprovado': 'reprovado';
echo 'Status do aluno: ' . $status;

# Retorna: Status do aluno: reprovado
```