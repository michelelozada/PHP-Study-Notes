> **Funções para inclusão de arquivos**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
Todas as funções abaixo incluem um arquivo PHP em outro arquivo, porém diferem principalmente com relação à maneira com que 
eventuais erros são tratados. São elas:
&nbsp;
     
&nbsp;  
**1 - Função `include()`**  
Inclui o arquivo passado como parâmetro. Caso haja algum problema em relação à inclusão do arquivo (não existir, não ser localizado, etc), 
será exibido um warning, mas a execução do script prosseguirá.
```php
<?php

include('footer.php');
```
&nbsp;   

**2 - Função `include_once()`**  
Mesma proposta da função acima, porém será feita antes a verificação de se o arquivo não foi chamado. Assim, o arquivo só será
importado caso isso ainda não tenha sido feito. 
```php
<?php

include_once('connect.php');
```
&nbsp;   

**3 - Função `require()`**  
Inclui o arquivo passado como parâmetro. Caso haja algum problema, será gerado um erro fatal e a execução do script será 
imediatamente abortada. 
```php
<?php

require('header.php');
```
&nbsp;   

**4 - Função `require_once()`**  
Mesma proposta da função acima, porém será feita antes a verificação de se o arquivo não foi chamado. Assim, o arquivo só será
importado caso isso ainda não tenha sido feito. 
```php
<?php

require_once('footer.php');
```