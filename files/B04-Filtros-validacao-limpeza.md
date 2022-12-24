> **Filtros de validação e limpeza**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
**1 - Filtros de validação *(validate filters)***  
&nbsp;   
Verificam se um valor de entrada está de acordo com um padrão pré-estabelecido, sendo que seu retorno será *true* ou *false*.  
&nbsp;   
Alguns destes filtros são:
```php
FILTER_VALIDATE_INT
# Valida se o valor é um inteiro (sinais + e - são permitidos se estiverem antes do número)

FILTER_VALIDATE_FLOAT
# Valida se o valor é um número float

FILTER_VALIDATE_EMAIL
# Valida se o valor é um endereço de e-mail

FILTER_VALIDATE_URL		
# Valida se o valor é uma URL
```
     
&nbsp;   
**Exemplo da aplicação dos filtros:**

*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="envio.php" method="POST">
		<label for="codigo">Seu código numérico:</label>
		<input type="text" name="codigo" id="codigo">
		
		<label for="peso">Valor da compra (em R$):</label>
		<input type="text" name="peso" id="peso">
		
		<label for="url">Seu site:</label>			
		<input type="text" name="url" id="url">
		
		<label for="email">Seu e-mail:</label>
		<input type="text" name="email" id="email">
		
		<button type="submit" name="enviar">Enviar</button>
	</form>
<!-- código HTML adicional -->
```
&nbsp;   
*Código PHP*
```php
<?php

if(isset($_POST['enviar'])):
	# Array para reportar eventuais erros
	$erros = array();
	
	# Validações com os filtros de validação
	if(!$codigo = filter_input(INPUT_POST,'codigo',FILTER_VALIDATE_INT)):
		$erros[] = "código numérico";
	endif;
	
	if(!$valor = filter_input(INPUT_POST,'valor',FILTER_VALIDATE_FLOAT)):
		$erros[] = "valor da compra";
	endif;
	
	if(!$site = filter_input(INPUT_POST,'site',FILTER_VALIDATE_URL)):
		$erros[] = "site";
	endif;
	
	if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
		$erros[] = "e-mail";
	endif;
	
	# Impressão das mensagens de sucesso ou erro
	if(!empty($erros)):
		foreach($erros as $value):
			echo "Erro: dado inválido no campo $value.<br>";
		endforeach;
		echo "<br>Por favor, preencha novamente os campos.";	
	else:
		echo "Os dados digitados em todos os campos estão corretos.";
	endif;
endif;


/* Assumindo que foi digitada a string 'olá' em todos os campos do formulário em HTML, o retorno será:
Erro: dado inválido no campo código numérico.
Erro: dado inválido no campo valor da compra.
Erro: dado inválido no campo site.
Erro: dado inválido no campo e-mail.
*/
```
&nbsp;
***   
&nbsp;   
**2 - Filtros de limpeza *(sanitize filters)***  
&nbsp;  
Verifica se um valor de entrada está de acordo com um padrão pré-estabelecido, sendo que este dado será retornado, já excluídos os caracteres que não correspondam a este padrão.  
&nbsp;         
Alguns destes filtros são:		
```php
FILTER_SANITIZE_SPECIAL_CHARS
# Escapa códigos HTML que eventualmente sejam digitados no formulário (ou seja, não irá renderizá-los).

FILTER_SANITIZE_NUMBER_INT
# Filtra e retorna apenas caracteres numéricos digitados (porém não remove os sinais + e -).
		
FILTER_SANITIZE_EMAIL
# Filtra e retorna apenas caracteres permitidos em endereços de email. Não removerá dígitos e os caracteres da lista que segue abaixo.

FILTER_SANITIZE_URL
# Filtra e retorna apenas caracteres permitidos em uma URL. Não removerá dígitos e caracteres da lista que segue abaixo.
```
(*) Caracteres que não serão removidos:`!`&nbsp;`#`&nbsp;`$`&nbsp;`%`&nbsp;`&`&nbsp;`'`&nbsp;`*`&nbsp;`+`&nbsp;`-`&nbsp;`=`&nbsp;`?`&nbsp;`^`&nbsp;`_`&nbsp;`{`&nbsp;`|`&nbsp;`}`&nbsp;`~`&nbsp;`@`&nbsp;`.`&nbsp;`[`&nbsp;`]`&nbsp;<code>`</code>  

     
&nbsp;   
**Exemplo da aplicação dos filtros:**

*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">
		
		<label for="idade">Idade:</label>
		<input type="text" name="idade" id="idade">
		
		<label for="email">Seu e-mail:</label>
		<input type="text" name="email" id="email">
		
		<label for="url">Seu site:</label>			
		<input type="text" name="url">
		
		<button type="submit" name="enviar">Enviar</button>
	</form>
<!-- código HTML adicional -->
```
&nbsp;   
*Código PHP*
```php
<?php

if(isset($_POST['enviar'])):
	# Validações com os sanitize filters
	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
		echo $nome."<br>";
								
	$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
		echo $idade."<br>";
							
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
		echo $email."<br>";
			
	$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
		echo $url."<br>";	
endif;	

/* Assumindo que foi digitadp nos respectivos campos do formulário em HTML: '<p>Marcos Reis</p>,'45p','marcos  reis@¢email.com' e 'www.ma£rcos¨reis.com.br' o retorno será:
<p>Marcos Reis</p>  # isso não foi renderizado na página
45
marcosreis@email.com
www.marcosreis.com.br
*/
?>
```
&nbsp;   
**3 - Aplicando os filtros de limpeza e validação simultaneamente:**    
&nbsp;  
Utilzando o mesmo exemplo acima. Reparar que primeiro é feita a limpeza do valor e daí sim, através da função `filter_var()` é feito o teste de validação.
```php
<?php

if(isset($_POST['enviar'])):
	# Array para reportar eventuais erros
	$erros = array();
	
	# Validações com os sanitize filters
	$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
		if(!filter_var($idade, FILTER_VALIDATE_INT)):
			$erros[] = "idade";
		else:
			echo $idade."<br>";
		endif;	
		
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
			$erros[] = "email";
		else:
			echo $email."<br>";
		endif;	
			
	$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
		if(!filter_var($url,FILTER_VALIDATE_URL)):
			$erros[] = "url";
		else:
			echo $url."<br>";
		endif;	
		
	
	# Impressão das mensagens de sucesso ou erro
	if(!empty($erros)):
		foreach($erros as $value):
			echo "Erro: dado inválido no campo $value.<br>";
		endforeach;
		echo "<br>Por favor, preencha novamente os campos.";	
	else:
		echo "Os dados digitados em todos os campos estão corretos.";
	endif;
endif;	
```		