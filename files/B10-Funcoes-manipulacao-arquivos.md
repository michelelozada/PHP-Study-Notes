> **Funções para manipulação de arquivos**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**Funções para manipulação de arquivos**   
* Função `fopen()` - Abre um arquivo 
* Função `fwrite()` - Escreve em um arquivo
* Função `fclose()` -  Fecha um arquivo aberto
* Função `feof()` - Indica se um arquivo chegou ao final
* Função `fgets()` - Lê uma linha do arquivo aberto
&nbsp;    

**Modos de arquivos/permissões de acesso**
* `a` - Abre arquivo somente para escrita. Cria o arquivo, se ele não existir. Coloca ponteiro do arquivo no final.
* `r` - Abre arquivo somente para leitura. Coloca ponteiro do arquivo no início.

&nbsp;
&nbsp;    
**1 - Escrevendo em um arquivo**   

```php
<?php 

# Criando e abrindo um arquivo para ser manipulado  
$arquivo = fopen('teste.txt','a');
# No primeiro parâmetro: nome do arquivo a ser manipulado; no segundo parâmetro: modo como arquivo será aberto

# Criação de um conteúdo para ser inserido no arquivo 
$conteudo = "Espera-se que esta linha esteja no arquivo chamado text.txt \n";

# Aqui é feita a adição do conteúdo acima no arquivo
fwrite($arquivo,$conteudo);

# Deve-se fechar o arquivo logo na sequência
fclose($arquivo);

// A cada vez que a função acima for executada, a linha definida em $conteudo é (novamente) impressa no documento teste.txt.
```
&nbsp;
&nbsp;    
**2- Fazendo a leitura de um arquivo**
```php
<?php 

$arquivo = 'teste.txt';
# Através de filesize, é obtido o tamanho do arquivo
$tamanhoArquivo = filesize($arquivo);
$arquivo = fopen($arquivo,'r');

# Estrutura while que irá percorrer o arquivo
while(!feof($arquivo)): # Enquanto não chegar ao final do arquivo aberto...
	$linha = fgets($arquivo,$tamanhoArquivo);  # ... o conteúdo de cada linha será atribuído a esta variável
	echo $linha . '<br>'; 
endwhile;
fclose($arquivo);

// Através do loop acima, é impresso todo o conteúdo do arquivo teste.txt
```