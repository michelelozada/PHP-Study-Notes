> **Operadores de string**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// 1. Operador de concatenação (.)
$nome 		= "Ana";
$sobrenome	= "Mattos";

echo $nome . $sobrenome; # Retorna: AnaMattos
echo $nome . " " . $sobrenome;  # Ana Mattos

		
// 2. Operador de atribuição de concatenação (.=)
$nome  = "Carlos";
$nome .= " Henrique Portella Filho";
echo $nome; # Retorna: Carlos Henrique Portella Filho
```