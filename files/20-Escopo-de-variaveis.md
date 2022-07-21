> **Escopo de variáveis**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php  

// 1.
$a = 1; 
function verifica(){
	$a = 3;
	echo $a; 
}	
echo $a; # Retorna: 1
verifica(); # 3
echo $a; # 1


// 2.
$a = 1; 
function verifica2(){
	global $a;
	$a++;
	echo $a; 
}	
echo $a; # Retorna: 1
verifica2(); # 2
echo $a; # 2


// 3.
$a = 1;
function verifica3(){
	$a = 3;
	global $a;
	echo $a; 
}	
echo $a; # Retorna: 1
verifica3(); # 1
echo $a; # 1


// 4.
$a = '1'; 
function verifica4(){
    global $a;
    $a = '2'; 
    echo $a;
}
echo $a; // Retorna: 1
verifica4(); // Retorna: 2
echo $a; // Retorna: 2


// 5.
$a = 1;
$b = 2;
function soma1(){
	$a = 4;
	$b = 6;
	echo $a + $b; 
}
echo $a; # Retorna: 1
echo $b; # 2
soma1(); # 10


// 6.
$a = 1;
$b = 2;
function soma2(){
	$a = 4;
	$b = 6;
	global $a,$b;  //* ver nota abaixo
	echo $a + $b;  //*
}
echo $a; # Retorna: 1
echo $b; # 2
soma2(); # 3


//(*) Obs: as duas linhas destacadas poderiam ser sintetizadas em: echo $GLOBALS['a'] + $GLOBALS['b'];
```