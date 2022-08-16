> **Arrays multidimensionais**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Criando um array multidimensional**
```php 
<?php   
	
$produtos = array (array(1, "Caneta ABC", 19.99),
	               array(2, "Caneta XYZ", 24.99),
	               array(3, "Caneta PQR", 35.99));
print_r($produtos);

/* Retorna:
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => Caneta ABC
            [2] => 19.99
        )

    [1] => Array
        (
            [0] => 2
            [1] => Caneta XYZ
            [2] => 24.99
        )

    [2] => Array
        (
            [0] => 3
            [1] => Caneta PQR
            [2] => 35.99
        )
)
*/
```
&nbsp;
&nbsp;       
**2. Acessando os elementos de um array multidimensional**
```php 
<?php   

// Com base no array do exercício 1 
echo $produtos[2][1]; # Retorna: Caneta PQR
echo $produtos[1][2]; # 24.99
```
&nbsp;
&nbsp;  
**3. Inserindo elementos no array**
```php 
<?php   

// Com base no array do exercício 1 
$produtos[] = array(4,"Caneta RST",39.99);
print_r($produtos);

/* Retorna:
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => Caneta ABC
            [2] => 19.99
        )

    [1] => Array
        (
            [0] => 2
            [1] => Caneta XYZ
            [2] => 24.99
        )

    [2] => Array
        (
            [0] => 3
            [1] => Caneta PQR
            [2] => 35.99
        )

    [3] => Array
        (
            [0] => 4
            [1] => Caneta RST
            [2] => 39.99
        )
)
*/
```
&nbsp;
&nbsp;  
**4. Removendo elementos do array**
```php 
<?php   

// Com base no array do exercício 1 
unset($produtos[2]);
print_r($produtos);

/* Retorna:
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => Caneta ABC
            [2] => 19.99
        )
    [1] => Array
        (
            [0] => 2
            [1] => Caneta XYZ
            [2] => 24.99
        )
)
*/
```
&nbsp;
&nbsp;  
**5. Exibindo conteúdo do array multidimensional via estrutura `foreach`**
```php 
<?php   

// Com base no array do exercício 1 
foreach($produtos as $valor){
	echo "Código: "   . $valor[0] . "\n"; 
	echo "Produto: "  . $valor[1] . "\n"; 
	echo "Preço: R$ " . $valor[2] . "\n"; 
	echo "\n";
}

/* Retorna:
Código: 1
Produto: Caneta ABC
Preço: R$ 19.99

Código: 2
Produto: Caneta XYZ
Preço: R$ 24.99

Código: 3
Produto: Caneta PQR
Preço: R$ 35.99
*/