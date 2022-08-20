> **Estrutura de controle - Elseif**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// Eu posso votar nestas eleições?	
	
$idade = 19;
$alfabetizado = false;

if($alfabetizado == false) 
{
	echo 'Você declarou ser analfabeto(a) e, portanto, seu alistamento eleitoral e voto são facultativos';
} 
else
{
	if($idade >= 16 && $idade < 18)
	{
		echo 'Sim, você pode se alistar para votar (lembrando que o voto é facultativo para sua faixa de idade).';	
	} 
	elseif ($idade >= 18 && $idade <= 69)
	{
		echo 'Sim, o voto aliás é obrigatório para a sua faixa de idade.';	
	} 
	elseif ($idade > 70)
	{
		echo 'Sim, você pode votar (lembrando que o voto é facultativo para pessoas com 70 anos ou mais).';	
	} 
	else
	{
		echo 'Não, você ainda não alcançou a idade mínima (16 anos) para se alistar e votar.';
	}
}
// Retorna: Você declarou ser analfabeto(a) e, portanto, seu alistamento eleitoral e voto são facultativos

$idade = 17;
$alfabetizado = true;
// Retorna: Sim, você pode se alistar para votar (lembrando que o voto é facultativo para sua faixa de idade).

$idade = 42;
$alfabetizado = true;
// Retorna: Sim, o voto aliás é obrigatório para a sua faixa de idade.

$idade = 72;
$alfabetizado = true;
// Retorna: Sim, você pode votar (lembrando que o voto é facultativo para pessoas com 70 anos ou mais).

$idade = 15;
$alfabetizado = true;
// Retorna: Não, você ainda não alcançou a idade mínima (16 anos) para se alistar e votar.
```
&nbsp;
&nbsp;    
**Sintaxe alternativa para estrutura de controle `foreach`**
```php
<?php  

$n1 = 20; 
$n2 = 10;

if($n1 > $n2):
   echo "O primeiro valor é maior que o segundo.";
elseif($n1 < $n2):
   echo "O segundo valor é maior que o primeiro.";
else:
    echo "Os dois valores são iguais.";
endif;

# Retorna: O primeiro valor é maior que o segundo.
```