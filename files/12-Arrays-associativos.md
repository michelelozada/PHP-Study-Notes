> **Arrays associativos**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
**1. Criando um array associativo**
```php  
<?php   

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
```
&nbsp;
&nbsp;    
**2. Acessando elementos de um array associativo**  
```php  
<?php   

echo $endereco['logradouro'] = 'Rua Cleide Geronasso'; # Retorna: Rua Cleide Geronasso
echo $endereco['cidade'] = 'Curitiba'; # Curitiba
```
&nbsp;
&nbsp;    
**3. Inserindo novos elementos na última posição do array**
```php  
<?php   

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
**4. Substituindo elementos em um array**  
```php  
<?php   

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
```
&nbsp;
&nbsp;    
**5. Removendo elementos de um array**  
```php  
<?php   

unset($endereco['pais']);
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
**6. Juntando elementos da matriz acima numa string: `função implode()`**  
```php  
<?php   

$string = implode(', ',$endereco); // o primeiro parâmetro diz respeito ao separador
echo $string;
# Retorna: Rua Cleide Geronasso, 152, apartamento 2, Curitiba, PR
```
&nbsp;
&nbsp;    
**7. Convertendo um array em uma string JSON: função `json_encode()`**  
```php  
<?php   

$cadastro = array( 
    "aluno"=>"Enzo Martins", 
    array("email"=>"enzo@email.com", 
          "celular"=>"419999-9999")); 
$json = json_encode($cadastro); 
  
echo($json); 
# Retorna: {"aluno":"Enzo Martins","0":{"email":"enzo@email.com","celular":"419999-9999"}} 
```