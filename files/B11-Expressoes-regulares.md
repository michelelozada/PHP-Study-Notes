> **Expressões regulares no PHP**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
**1 - Revisão sobre expressões regulares [^1]**  
&nbsp;  

* ***Uma expressão regular***  
Deve sempre estar entre delimitadores `/`
&nbsp;  

* ***Possui as seguintes âncoras***   
`^` - indica o início da expressão  
`$` - indica o fim da expressão 
&nbsp;  

* ***Intervalo de caracteres permitidos***  
`[A-Z]` - Letras maiúsculas   
`[a-z]` - Letras minúsculas   
`[0-9]` - Números   
`[A-Za-z]` - Letras maiúsculas e minúsculas   
`[A-Za-z0-9]` - Maiúsculs, minúsculas e números   
`áàâãéèêíïóôõöúçñ` - Vogais acentuadas e cedilha minúsculas  
`ÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ`- Vogais acentuadas e cedilha maiúsculas
&nbsp;  

* ***Intervalo de caracteres proibidos***   
*Basta acrescentar um `^` no início de intervalo*  
`[^A-Z]` - Quaisquer letras que não sejam maiúsculas
`[^1-9]` - Quaisquer caracteres que não sejam números
&nbsp;  

* ***Quantificadores e números de ocorrências permitidos na expressão***  
`?` - caractere(s) que antecede(m) este sinal pode(m) ter nenhuma ou uma ocorrência. *Ex: /^[a-z]?$/*     
`*` - caractere(s) que antecede(m) este sinal pode(m) ter nenhuma, uma ou várias ocorrências. *Ex: /^[a-z]*$/*     
`+` - caractere(s) que antecede(m) este sinal pode(m) ter uma ou várias ocorrências. *Ex: /^[a-z]+$/*     
`{n}` - caractere(s) que antecede(m) este sinal pode(m) ter exatamente m ocorrências. *Ex: /^[a-z]{4}$/*  
`{n,}` - caractere(s) que antecede(m) este sinal pode(m) ter mais que m ocorrências. *Ex: /^[a-z]{4,}$/*     
`{n,m}` - caractere(s) que antecede(m) este sinal pode(m) ter de n a m ocorrências. *Ex: /^[a-z]{1,4}$/*  
&nbsp;  

* ***Outros***  
`|` - Alternação (representa ou). *Ex: (.com | .com.br) -> .com ou .com.br*  
`\` - Caractere de escape  
`()` - Indica o início e o fim de um grupo  
`i`-  Transforma a expressão em case-insensitive. *Ex: /^[a-z]+$/i*  
&nbsp;
***    
**2 - Verificando se uma string é compatível com uma expressão regular: função `preg_match()`**  
Esta função procura um padrão específico em uma string, sendo que retornará verdadeiro se o padrão existir.  
&nbsp;  

*Exemplo 1 - Validando uma string*
```php
<?php 

$str = 'Programação';
$regex = '/^[A-Za-záàâãéèêíïóôõöúçñ]*$/';

if(preg_match($regex, $str)):
	echo "String compatível com a expressão regular.";
else:
	echo "String inválida.";
endif;

# Retorna: String compatível com a expressão regular.
```
&nbsp;  

*Exemplo 2 - Validando um email*
```php
<?php 

$email = "atendimento@email.org";
$regex = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|com.br)$/i";

if(preg_match($regex, $email)):
	echo "Formato de e-mail válido!";
else:
	echo "Formato de e-mail inválido.";
endif;

# Retorna: Formato de e-mail inválido (obs: já que defini que só são aceitos e-mails com a terminação .com ou .com.br)
```
&nbsp;  

*Exemplo 3 - Formatando uma data*
```php
<?php 

$data = '10/09/20225';
$regex= '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/';

if(preg_match($regex, $data)):
	echo "Formato de data válido!";
else:
	echo "Formato de data inválido.";
endif;

# Retorna: Formato de data inválido (já que acidentalmente entrei um ano com 5 dígitos, ao invés de 4).
```
&nbsp;  

[^1]: Com ajuda do conteúdo dos posts **Expressões regulares no PHP**, disponível 
[neste link](http://www.diogomatheus.com.br/blog/php/expressoes-regulares-no-php/) e 
**Expressões Regulares(regex) em PHP**, disponível [neste link](https://www.botecodigital.dev.br/php/expressoes-regulares-regex-php/).