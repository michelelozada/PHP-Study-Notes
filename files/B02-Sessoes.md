> **Sessões**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
**$_SESSION**    
É um array associativo que contém as variáveis de sessão, que armazenam informações sobre a sessão de um usuário e estão 
disponíveis para todas as várias páginas da aplicação web.  
&nbsp;
&nbsp;    
***index.php***
```php
<?php 

# Iniciando uma sessão: função `session_start()`
session_start();
	
# Declarando e inicializando as variáveis de sessão 
$_SESSION['assunto'] = 'estudo de programação';
$_SESSION['linguagem'] = 'PHP';
	
echo '<br><a href="home.php">Clique para ir para a próxima tela</a>';
```	

&nbsp;    
***home.php***
```php
<?php 

# Retomando a sessão atual existente
session_start();

# Recuperando as variáveis de sessão
echo "Assunto: ".$_SESSION['assunto']."</br>";
echo "Linguagem utilizada: ".$_SESSION['linguagem'];

# Obtendo o id da sessao atual: função `session_id()`
echo "<br>Identificação da sessão: ".session_id()."<br>";

/* Retorna:
Assunto: estudo de programação
Linguagem utilizada: PHP
Identificação da sessão: ctumsvhqcuyqre30eteq7r2k3m
*/

echo '<br><a href="logout.php">Clique aqui para encerrar a sessão</a>';
```

&nbsp;    
***logout.php***
```php
<?php 

# Retomando a sessão atual existente
session_start();

# Limpando as variáveis de sessão (após isso, a sessão ainda existirá!)
session_unset();

# Destruindo a sessão atual
session_destroy();
```