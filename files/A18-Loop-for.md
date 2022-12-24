> **Estrutura de repetição - Loop for**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php

// Escreva um programa que, sendo um informado um número, diga se este é um número primo ou não.

$numero = 5;
$total=0;

echo "Analisando se " . $numero . " é um número primo...";
echo "Multiplos de " . $numero . ": ";
for($c=1; $c<= $numero ; $c++){
	if($numero % $c == 0) 
	{
		$total++;
		echo $c .' ';
	}
}

echo "Quantidade de múltiplos: ". $total ;

if($total == 2)
{
	echo ('Resultado: É um número primo!');
}
elseif($numero == 1)
{
	echo ('Resultado: Um número primo precisa ser maior ou igual a dois, portanto o número 1 não é número primo!');
}
else
{
	echo ('Resultado: Não é um número primo!');
}

/* Retorna:
Analisando se 5 é um número primo...
Multiplos de 5: 1 5 
Quantidade de múltiplos: 2
Resultado: É um número primo!
*/
```
&nbsp; 
&nbsp;       
**Sintaxe alternativa para estrutura de controle `for`**
```php
<?php

for($c=0; $c<=40; $c+=5):
    echo "$c ";
endfor;

# Retorna: 0 5 10 15 20 25 30 35 40 
```
&nbsp; 
&nbsp; 
```php
<?php 

// Ex. 1 
$churrasco = array('carnes','pão de alho','vinagrete','farofa','queijo coalho');
	
for($i = 0; $i < 4; $i++){ 
	echo $i + 1 . '- ';
	echo $churrasco[$i] . '</br>';
}

/* Retorna:
1- carnes
2- pão de alho
3- vinagrete
4- farofa
*/	


// Ex. 2 
for($i = 0; $i < count($churrasco); $i++){
	echo $i + 1 . '- ';
	echo $churrasco[$i] . '</br>';;
}

/* Retorna:
1- carnes
2- pão de alho
3- vinagrete
4- farofa
5- queijo coalho
*/
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>