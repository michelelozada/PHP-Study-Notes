/*
 *  Arrays multidimensionais
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
  
  
<?php   
	
//1. Criando um array multidimensional
	
$carros = [
	['Fiat', 'Mobi', '49.949'], 
	['Renault', 'Kwid', '50.240'],
	['Ford', 'Ka', '52.694'],
	['Chevrolet', 'Joy', '54.200'],
];
print_r($carros);
/* Retorna:
Array
(
    [0] => Array
        (
            [0] => Fiat
            [1] => Mobi
            [2] => 49.949
        )

    [1] => Array
        (
            [0] => Renault
            [1] => Kwid
            [2] => 50.240
        )

    [2] => Array
        (
            [0] => Ford
            [1] => Ka
            [2] => 52.694
        )

    [3] => Array
        (
            [0] => Chevrolet
            [1] => Joy
            [2] => 54.200
        )
)
*/


// 2. Acessando os elementos de um array multidimensional
$carros = [
	['Fiat', 'Mobi', '49.949'], 
	['Renault', 'Kwid', '50.240'],
	['Ford', 'Ka', '52.694'],
	['Chevrolet', 'Joy', '54.200'],
];
echo $carros[2][0]; # Retorna: Ford
echo $carros[1][1]; # Kwid


// 3. Inserindo elementos no array
$carros[] = ['Volkswagen', 'Fox', '64.120'];
print_r($carros);
/*
Array
(
    [0] => Array
        (
            [0] => Fiat
            [1] => Mobi
            [2] => 49.949
        )

    [1] => Array
        (
            [0] => Renault
            [1] => Kwid
            [2] => 50.240
        )

    [2] => Array
        (
            [0] => Ford
            [1] => Ka
            [2] => 52.694
        )

    [3] => Array
        (
            [0] => Chevrolet
            [1] => Joy
            [2] => 54.200
        )

    [4] => Array
        (
            [0] => Volkswagen
            [1] => Fox
            [2] => 64.120
        )
)
*/


// 4. Removendo elementos do array:
$carros = [
	['Fiat', 'Mobi', '49.949'], 
	['Renault', 'Kwid', '50.240'],
	['Ford', 'Ka', '52.694'],
	['Chevrolet', 'Joy', '54.200'],
];
unset($carros[2]);
print_r($carros);
/* Retorna:
Array
(
    [0] => Array
        (
            [0] => Fiat
            [1] => Mobi
            [2] => 49.949
        )

    [1] => Array
        (
            [0] => Renault
            [1] => Kwid
            [2] => 50.240
        )

    [3] => Array
        (
            [0] => Chevrolet
            [1] => Joy
            [2] => 54.200
        )

)
*/


// 5. Juntando os elementos de uma matriz numa string

$carros = [
	['Fiat', 'Mobi', '49.949'], 
	['Renault', 'Kwid', '50.240'],
	['Ford', 'Ka', '52.694'],
	['Chevrolet', 'Joy', '54.200'],
];

echo("Carro | Modelo | Preço (em R$)\n");
foreach($carros as $car => $secArray){
    echo implode(' | ', $secArray) . "\n"; 
}

/*Retorna:
Carro | Modelo | Preço (em R$)
Fiat  Mobi  49.949
Renault  Kwid  50.240
Ford  Ka  52.694
Chevrolet  Joy  54.200
*/