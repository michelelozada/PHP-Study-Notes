> **Estrutura de controle - Switch**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*       
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
/* Pesquisa de equivalência entre conceitos e notas finais escolares*/

$conceito = 'C';

switch($conceito){
	case 'A':
		$faixa1 = '9.0'; 
		$faixa2 = '10.0';
		break;
	case 'B':
		$faixa1 = '7.0'; 
		$faixa2 = '8.9';
		break;
	case 'C':
		$faixa1 = '5.0'; 
		$faixa2 = '6.9';
		break;
	case 'D':
		$faixa1 = '4.5'; 
		$faixa2 = '4.9';
		break;
	case 'E':
		$faixa1 = '0'; 
		$faixa2 = '4.4';
		break;
}	
echo 'O conceito ' . $conceito . ' corresponde à faixa de notas compreendidas entre ' . $faixa1 . ' e '. $faixa2 .'.';

# Retorna: O conceito C corresponde à faixa de notas compreendidas entre 5.0 a 6.9.
```
&nbsp;  
**Sintaxe alternativa para estrutura de controle `switch`**
```php
<?php

$option = 1;

switch ($option):
    case 1:
        echo "Mensagem A";
        break;
    case 2:
        echo "Mensagem B";
        break;
    default:
        echo "Mensagem C";
endswitch;

# Retorna: Mensagem A
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>