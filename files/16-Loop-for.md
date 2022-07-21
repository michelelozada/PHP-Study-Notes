> **Estrutura de repetição - Loop for**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
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