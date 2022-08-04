> **Arrays associativos**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php  
<?php   
	
// 1. Criando um array associativo
$endereco = [];
$endereco['logradouro'] = 'Rua Cleide Geronasso';
$endereco['numero'] = 1525;
$endereco['complemento'] = 'apartamento 2';
$endereco['cidade'] = 'Curitiba';
$endereco['estado'] = 'PR';
print_r ($endereco);
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
)
*/


// 2. Acessando elementos de um array associativo
echo $endereco['logradouro'] = 'Rua Cleide Geronasso'; # Retorna: Rua Cleide Geronasso
echo $endereco['cidade'] = 'Curitiba'; # Curitiba


// 3 . Inserindo novos elementos na última posição do array
$endereco['pais'] = 'Brasil';
print_r ($endereco);
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
    [pais] => Brasil
)
*/


// 4. Substituindo elementos em um array
$endereco['numero'] = 152;
/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 152
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
    [pais] => Brasil
)
*/


// 5. Removendo elementos de um array
/* Retorna:
unset($endereco['pais']);
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 152
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
)
*/


// 6. Juntando elementos da matriz acima numa string: função implode()
$string = implode(', ',$endereco); // o primeiro parâmetro diz respeito ao separador
echo $string;
# Retorna: Rua Cleide Geronasso, 152, apartamento 2, Curitiba, PR


// 7. Convertendo um array em uma string JSON: função json_encode() 
$cadastro = array( 
    "aluno"=>"Enzo Martins", 
    array( 
        "email"=>"enzo@email.com", 
        "celular"=>"419999-9999"
    ) 
); 
  
$json = json_encode($cadastro); 
  
echo($json); 
# Retorna: {"aluno":"Enzo Martins","0":{"email":"enzo@email.com","celular":"419999-9999"}} 
```