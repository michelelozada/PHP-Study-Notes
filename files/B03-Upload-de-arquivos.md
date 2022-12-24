> **Upload de arquivos com o método POST**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
**1 - Upload de um arquivo de imagem**

*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="envio.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo"><br>
		<button type="submit" name="enviar">Enviar</button>
	</form>
<!-- código HTML adicional -->
```
&nbsp;   
*Código PHP*
```php
<?php

if(isset($_POST['enviar'])):
	$formatosPermitidos = array("png","jpeg","jpg","gif");
	
	# Armazenando a extensão do arquivo de upload
	$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);  
	
	# Armazenando o nome do arquivo (com extensão)
	$nome = pathinfo($_FILES['arquivo']['name'],PATHINFO_BASENAME);  
	
	# Testando se é a extensão é compatível
	if(in_array($extensao,$formatosPermitidos)):
		# Caminho da pasta onde será salvo o arquivo 
		$pasta ="arquivos/";
		
		# Caminho do arquivo temporário 
		$temporario = $_FILES['arquivo']['tmp_name'];
		
		# Renomeando o arquivo enviado
		$novoNome = uniqid().".$extensao";
		
		# Função que fará o upload do arquivo
		if(move_uploaded_file($temporario,$pasta.$novoNome)):
			echo "Upload do arquivo $nome realizado com sucesso. Disponível em $pasta.$novoNome";
		else: 
			echo "Erro não foi possível fazer o upload do arquivo $temporario";
		endif;	
	else:
		echo "Desculpe, mas arquivos com extensão .$extensao não são permitidos";
	endif;	
endif;
```
&nbsp;
     
&nbsp;   
**2 - Upload de mais de um arquivo de imagem**

*Código HTML*
```html
<!-- código HTML adicional -->
	<form action="envio.php" method="POST" enctype="multipart/form-data">
		<!-- repare que o valor de name é um array agora e também foi incluso o atributo multiple -->
		<input type="file" name="arquivo[]" multiple><br>
		<button type="submit" name="enviar">Enviar</button>
	</form>
<!-- código HTML adicional -->
```
&nbsp;   
*Código PHP*
```php
<?php

if(isset($_POST['enviar'])):
	$formatosPermitidos = array("png","jpeg","jpg","gif");
	# Contagem de quantos arquivos há na superglobal $_FILES
	$quantidadeArquivos = count($_FILES['arquivo']['name']);
	$contador =  0;
	
	while($contador < $quantidadeArquivos):
		# Armazenando a extensão do arquivo de upload
		$extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);  
		
		# Armazenando o nome do arquivo (com extensão)
		$nome = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_BASENAME);  
		
		# Testando se a extensão é compatível
		if(in_array($extensao,$formatosPermitidos)):
			# Caminho da pasta onde será salvo o arquivo 
			$pasta ="arquivos/";
			
			# Caminho do arquivo temporário 
			$temporario = $_FILES['arquivo']['tmp_name'][$contador];
			
			# Renomeando o arquivo enviado
			$novoNome = uniqid().".$extensao";
			
			# Função que fará o upload dos arquivos
			if(move_uploaded_file($temporario,$pasta.$novoNome)):
				echo "<li>Upload do arquivo $nome realizado com sucesso. Disponível em: $pasta.$novoNome</li><br>";
			else: 
				echo "<li>Houve erro no envio do arquivo $nome</li><br>";
			endif;	
		else:
			echo "<li>Desculpe, mas não pôde ser feito o upload do arquivo $nome (motivo: extensão não permitida)</li><br>";
		endif;	
		$contador++;	
	endwhile;
endif;
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>