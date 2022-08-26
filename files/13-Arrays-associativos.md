> **Arrays associativos**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Criando um array associativo**
```php  
<?php   

$endereco = array();
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
```
&nbsp;
&nbsp;   
**2. Modificando os índices padrão**  
```php  
<?php   

$endereco = array('Rua Cleide Geronasso', 1525, 'apartamento 2','Curitiba','Paraná');
# Aqui são definidos os novos índices
$endereco = array('Endereço'=>'Rua Cleide Geronasso','numero'=>1525,'complemento'=>'apartamento 2','cidade'=>'Curitiba','estado'=>'Paraná');
print_r($endereco);

/* Retorna:
Array
(
    [Endereço] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => Paraná
)
*/
```
&nbsp;
&nbsp;  
**3. Acessando elementos de um array associativo**  
```php  
<?php   

# Considerando o array do exercício 1
echo $endereco['logradouro']; # Retorna: Rua Cleide Geronasso
echo $endereco['cidade']; # Curitiba
```
&nbsp;
&nbsp;    
**4. Exibindo elementos de um array associativo com a estutura `foreach`**  
```php  
<?php   

$endereco['logradouro'] = 'Rua Cleide Geronasso';
$endereco['número'] = 1525;
$endereco['CEP']='81520-410';

foreach($endereco as $key=>$value){
    echo "O valor do campo " . $key . " é ". $value . ".\n";
}

/* Retorna:
O valor do campo logradouro é Rua Cleide Geronasso.
O valor do campo número é 1525.
O valor do campo CEP é 81520-410.
*/
```
&nbsp;
&nbsp;  
**5. Inserindo novos elementos na última posição do array**
```php  
<?php   

# Considerando o array do exercício 1
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
```
&nbsp;
&nbsp;    
**6. Substituindo elementos em um array**  
```php  
<?php   

# Considerando o array do exercício 1
$endereco['numero'] = 152;
print_r ($endereco);

/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 152
    [complemento] => apartamento 2
    [cidade] => Curitiba
    [estado] => PR
)
*/
```
&nbsp;
&nbsp;    
**7. Removendo elementos de um array**  
```php  
<?php   

# Considerando o array do exercício 1
unset($endereco['estado']);
print_r ($endereco);

/* Retorna:
Array
(
    [logradouro] => Rua Cleide Geronasso
    [numero] => 1525
    [complemento] => apartamento 2
    [cidade] => Curitiba
)
*/
```
&nbsp;
&nbsp;    
**8. Juntando elementos da matriz acima numa string: função `implode()`**  
```php  
<?php   

# Considerando o array do exercício 1
$string = implode(', ',$endereco); 
echo $string;

# Retorna: Rua Cleide Geronasso, 152, apartamento 2, Curitiba, PR
```
&nbsp;
&nbsp;    
**9. Convertendo um array em uma string JSON: função `json_encode()`**  
```php  
<?php   

$cadastro = array("aluno"=>"Enzo Martins", 
                   array("email"   => "enzo@email.com", 
                         "celular" => "419999-9999")); 
$json = json_encode($cadastro); 
echo($json); 

# Retorna: {"aluno":"Enzo Martins","0":{"email":"enzo@email.com","celular":"419999-9999"}} 
```