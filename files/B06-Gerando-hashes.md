> **Funções para gerar hashes no PHP**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
São elas:  
* **Função `md5()`**     
Calcula o hash de uma string. Retorna o hash MD5 como um número hexadecimal de 32 caracteres.    
&nbsp;    
* **Função `sha1()`**  
Calcula a hash de uma string. Retorna o hash SHA1 como um número hexadecimal de 40 caracteres.  
&nbsp;    
* **Função `password_hash()`**  
Cria um hash de uma senha  passada como parâmetro e retorna o hash calculado com base em algoritmo que é passado
como segundo parâmetro da função.  

    
:warning: As funções **`md5()`** e **`sha1()`** não são recomendadas para armazenamento de senhas/dados sensíveis, pois já existem 
tabelas/dicionários que contêm o resultado de cálculos realizados por seus algoritmos, de maneira que - embora
sejam utilizados para fins didáticos - na prática, não oferecem segurança!
&nbsp;
     
&nbsp;    
**1 - Aplicação da função `md5()`:**
```php
<?php

$str = "apenas1teste";

$strMD5 = md5($string);

# Exibindo informações sobre o hash gerado
var_dump($strMD5);
# Retorna: string(32) "ab72f712853e5a7d897b371e39867842"

# Comparando a string com o valor do hash gerado
$hash = 'ab72f712853e5a7d897b371e39867842';

if(md5($str) == $hash):
	echo "Válido!";
else:
	echo "Inválido!";
endif;  
# Retorna: Válido!
```
&nbsp;
     
&nbsp; 
**2 - Aplicação da função `sha1()`:**
```php
<?php

$string = "apenas1teste";

$stringSHA1 = sha1($string);

# Exibindo informações sobre o hash gerado
var_dump($stringSHA1);
# Retorna: string(40) "fa2861c1b04add53c0e4c8487113ee5bb01fb249"

# Comparando a string com o valor do hash gerado
$hash = 'fa2861c1b04add53c0e4c8487113ee5bb01fb249';
if(sha1($string) == $hash):
	echo "Válido!";
else:
	echo "Inválido!";
endif;
# Retorna: Válido!
```
&nbsp;
     
&nbsp; 
**3 - Aplicação da função `password_hash()`:**
```php
<?php

$senha = "apenas1teste";

$senhaNova = password_hash($senha, PASSWORD_DEFAULT);

# Exibindo informações sobre o hash gerado
var_dump($senhaNova);
# Retorna: string(60) "$2y$10$3Zt8OV4N5JtLYSUmP2dCYO5t8atSIL5Cpw4gsz7gAZef4s9H5kB62"
```
*Sobre o retorno acima, a cada vez que atualizo a página, o valor do hash é outro... e assim sucessivamenete.*  
&nbsp;   
Para fazer a comparação da string com o valor do hash gerado, existe aqui a função chamada **`password_verify()`**, que retorna 
*true* ou *false*. 
```php

$hash = '$2y$10$1VtTkfoDV203Wy36xhZUtOaueZ2Ed8Urf4tRlJVpFHQnFl3rULpZK';

if(password_verify($senha,$hash)):
	echo "Senha válida!";
else:
	echo "Senha inválida";
endif;

# Retorna: Senha válida!

?>
```