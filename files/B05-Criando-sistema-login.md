> **Criando um sistema de login**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
O sistema de login vai utilizar o paradigma procedural e extensão MySQLi, apenas para fins didáticos/pedagógicos. É baseado no exercício
explicado [neste vídeo](https://www.youtube.com/watch?v=SmMiPGTO5j0) do canal Node Studios Treinamentos

&nbsp;
***
&nbsp; 
**script do banco de dados**
```mysql 
CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL  
);

INSERT INTO `tb_usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Michele', 'admin', 'e10adc3949ba59abbe56e057f20f883e');  # aplicada aqui a função MD5()
``` 
&nbsp;
***
&nbsp; 
**script db_connect *(arquivo de conexão com banco de dados)***
```php
<?php 
	
# Criando variáveis com os dados do banco de dados
# endereço do servidor
$servername = 'localhost';
# nome do usuário
$username = 'root';
# senha 
$password = ''; 
# nome do banco de dados 
$db_name = 'sistemalogin';

# A conexão será armazenada dentro da variável $connect
$connect = mysqli_connect($servername,$username,$password,$db_name);

# Checando a conexão
if(mysqli_connect_error()):
	echo "Falha na conexão: ". mysqli_connect_error();
else:
	echo "Conexão estabelecida com sucesso!";
endif;
```
&nbsp;
***
&nbsp; 
**script index.php *(bloco HTML)***
```html
<!-- código HTML adicional -->
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<hr>
		<!-- O código PHP abaixo será para eventual exibição de mensagem de erro no preenchimento do formulário -->
		<?php 
		if(!empty($erros)):
			foreach($erros as $erro):
				echo $erro;
			endforeach;
			endif;
		?>
		<hr>
		<label for="login">Login:</label>
		<input type="text" name="login" id="login"><br>
		
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha"><br>
		
		<button type="submit" name="enviar">Enviar</button>
	</form>
<!-- código HTML adicional -->
``` 
&nbsp;
***     
&nbsp; 
**script index.php *(bloco PHP)***
```php
<?php
	
# Incluindo o arquivo de conexão com o banco de dados
require_once 'db_connect.php';

# Iniciando uma sessão
session_start();

if(isset($_POST['enviar'])):
	# Criação do array que armazenará eventuais erros
	$erros = array();
	
	# Criação das variáveis
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	
	# Verificando se os campos do formulário vieram preenchidos
	if(empty($login) || empty($senha)):
		$erros[]= "Atenção: os dois campos do formulário precisam ser preenchidos.<br>";
	else:
		$sql = "SELECT login FROM tb_usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);
		
		# Verificando se login digitado existe no banco de dados
		if(mysqli_num_rows($resultado) > 0):  # true significará que existe um registro com este login no bd
			# Criptografando a senha antes de inseri-la no SELECT
			$senha = md5($senha);
			
			# Verificando se login e senha digitados são compatíveis
			$sql = "SELECT * FROM tb_usuarios WHERE login = '$login' AND senha ='$senha'";
			$resultado = mysqli_query($connect, $sql);
			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado); 
				# $dados agora é um array com os dados da consulta sql acima
				mysqli_close($connect);
				
				# Declarando e inicializando as variáveis de sessão 
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				
				# Redirecionando usuário para página restrita
				header('Location: home.php');
			else:
				$erros[]= "Atenção: usuário e senha digitados não conferem.<br>";
			endif; 
		else:
			$erros[]= "Atenção: o login digitado não está cadastrado no sistema.<br>";
		endif;
	endif;
endif;	
?>
```
&nbsp;
***     
&nbsp; 
**script home.php *(bloco PHP)***
```php
<?php
	
# Incluindo o arquivo de conexão com o banco de dados
require_once 'db_connect.php';

# Retomando a sessão
session_start();

# Verificação de segurança para saber se usuário está logado 
if(!isset($_SESSION['logado'])): # isso significa que usuário não logou no sistema
	header('Location: index.php'); # portanto não deve acessar página restrita
endif;

# 'Pegando' dados do usuário
$id = $_SESSION['id_usuario']; 
$sql = "SELECT * FROM tb_usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado); 
# variável $dados agora é um array com os dados da consulta sql acima
mysqli_close($connect);
?>
```
&nbsp;
***     
&nbsp; 
**script home.php *(bloco HTML)***
```html
<!-- código HTML adicional -->
	<h1>Olá, <?php echo $dados['nome']; ?>!</h1>
	<a href="logout.php">Clique aqui para encerrar a sessão</a>
<!-- código HTML adicional -->
```
&nbsp;
***     
&nbsp; 
**script logout.php***
```php
<?php
	
# Encerrando a sessão	
session_start();
session_unset();
session_destroy();

header('Location: index.php');
```