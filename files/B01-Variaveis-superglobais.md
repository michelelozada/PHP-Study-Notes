> **Variáveis superglobais**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
**Superglobais** 
&nbsp;
&nbsp;    
Variáveis nativas que estão disponíveis em todos escopos do script.  
&nbsp;
&nbsp;    
São elas: 
```php
$GLOBALS
# Referencia todas as variáveis disponíveis no escopo global.  

$_SERVER
# Fornece informações a respeito do servidor e do ambiente de execução.
 
$_GET
# Um array associativo de variáveis passadas para o script atual via os parâmetros da URL. 

$_POST
# Um array associativo de variáveis passados para o script atual via método HTTP POST.  

$_FILES
# Um array associativo de items enviado através do script atual pelo método HTTP POST.

$_COOKIE
# Um array associativo de variáveis passadas para o atual script via HTTP Cookies.

$_SESSION
# Um array associativo contendo variáveis de sessão disponíveis para o atual script.

$_REQUEST
# Um array associativo que por padrão contém informações de $_GET, $_POST e $_COOKIE.

$_ENV
# Um array associativo de variáveis passadas para o script atual via o método do ambiente.
````
&nbsp;
***
&nbsp;      
**$GLOBALS**  
```php
<?php 

function media(){
    $media = ($GLOBALS['x'] +  $GLOBALS['y'])/2;  
	echo $media;
}

$x = 30;
$y = 10;

media();

# Retorna: 20
```
&nbsp;
***
&nbsp;   
**$_SERVER**  
Seguem abaixo alguns de seus principais índices.
```php
<?php 

# Nome do arquivo do script que está executando.
echo $_SERVER['PHP_SELF']; 

# O nome host do servidor onde o script atual é executado.
echo $_SERVER['SERVER_NAME']; 

# O caminho absoluto do script atualmente em execução.
echo $_SERVER['SCRIPT_FILENAME']; 

# O diretório raiz sob onde o script atual é executado, como definido no arquivos de configuração do servidor.
echo $_SERVER['DOCUMENT_ROOT']; 

# A porta na máquina servidora utilizada pelo servidor web para comunicação.
echo $_SERVER['SERVER_PORT']; 

# O endereço IP de onde o usuário está visualizado a página atual
echo $_SERVER['REMOTE_ADDR'];
```
&nbsp;
***
&nbsp;   
**$_POST**    
&nbsp;  
*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="envia.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"><br>
		
		<label for="email">E-mail:</label> 
		<input type="email" name="email" id="email"><br>
		
		<button type="submit">Enviar</button>
	</form>	
<!-- código HTML adicional -->
```
&nbsp;   
*Código PHP*
```php
<?php 

$nome  = $_POST['nome'];
$email = $_POST['email'];

if(!empty($_POST['nome'] && $_POST['email'])):
	echo "Seu nome é $nome. Seu email é $email.";
else:
	echo "Nenhum dado foi enviado no momento da submissão do formulário.";
endif;

# Assumindo que foi digitado no formulário HTML: "Laura Marques " e "luana@email.com"
# Retorna: Seu nome é Laura Marques. Seu email é luana@email.com.

var_dump($_POST);

/* Retorna:
array(2) {["nome"] => string(13) "Laura Marques" 
          ["email"]=> string(15) "luana@email.com"}
*/
````
&nbsp;
***
&nbsp;   
**$_GET**   
&nbsp;  
*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="envia.php" method="GET">
		<label for="cidade">Cidade:</label>
		<input type="text" name="cidade" id="cidade"><br>
		
		<label for="idade"l>Idade:</label> 
		<input type="number" name="idade" id="idade"><br>
		
		<button type="submit">Enviar</button>
	</form>	
<!-- código HTML adicional -->
````
&nbsp;  
&nbsp; 
*Código PHP*
```php
<?php 

$cidade  = $_GET['cidade'];
$idade = $_GET['idade'];

if(!empty($_POST['nome'] && $_POST['email'])):
	echo echo "Você é de $cidade e tem $idade anos.";
else:
	echo "Nenhum dado foi enviado no momento da submissão do formulário.";
endif;

# Assumindo que foi digitado no formulário HTML: "Curitiba" e "20".
# Retorna: Você é de Curitiba e tem 20 anos.

var_dump($_GET);

/* Retorna:
array(2) { ["cidade"]=> string(8) "Curitiba" 
           ["idade"] => string(2) "20"}
*/
```
&nbsp; 
&nbsp;    
**Valores também são aceitos quando passados via link (e não formulário).**     
&nbsp;   
*Código HTML*
```html
<!-- código HTML adicional -->
	<a href="envia.php?cidade=Curitiba&idade=20">Enviar informações</a>
<!-- código HTML adicional -->
```
&nbsp;  
&nbsp; 
*Código PHP*
```php
<?php 

echo "Você é de " .$_GET['cidade']. " e tem " .$_GET['idade']. " anos.";

# Retorna: Você é de Curitiba e tem 20 anos.
````