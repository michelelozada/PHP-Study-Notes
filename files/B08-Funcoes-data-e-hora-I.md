> **Funções de data e hora (I)**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
**1 - Configurando um fuso horário padrão**  
```php
<?php

date_default_timezone_set('America/Sao_Paulo');
```
&nbsp;
&nbsp;   
**2 - Retornando a data e/ou horário no momento atual da execução: função `date()`**  
&nbsp; 
&nbsp;     
*Retornando o dia*
```php
<?php

echo date('d'); # Retorna: 09
echo date('D'); # Fri 
```
&nbsp;   
*Retornando o mês*
```php
<?php

echo date('m'); # 09
echo date('M'); # Sep
```
&nbsp;   
*Retornando o ano*
```php
<?php

echo date('y'); # 22
echo date('Y'); # 2022
```
&nbsp;   
*Retornando o dia da semana*
```php
<?php

echo date('l'); # Friday
```
&nbsp;   
*Compondo a data (de hoje)*
```php
<?php

echo date('d/m/Y'); # 09/09/2022
```
&nbsp;    

*Retornando horários*
```php
<?php

echo date('h:i:s'); # 03:54:23
echo date('H:i:s'); # 15:54:23
# Obtendo o período
echo date('A'); # PM
```
&nbsp;    
*Compondo data e hora*
```php
<?php

echo date('d/m/Y h:i:s A'); # 09/09/2022 03:54:23 PM
```
&nbsp;    

**Formatos para armazenamento no banco de dados**  
&nbsp; 
&nbsp;     
*Armazenamento de data*
```php
<?php

$date = date('Y-m-d');
echo $date; # 2022-09-09
```
&nbsp;    
*Armazenamento de data e hora*
```php
<?php

$datetime = date('Y-m-d H:i:s');
echo $datetime; # 2022-09-09 15:54:23
```
&nbsp; 

**3 - Função `strtotime()`:**  
```php
<?php

$date = '2022-09-02 13:44:57';
$date = strtotime($date);
echo date('d/m/Y',$date); # 02/09/2022

# Caso $date não seja enviado como parâmetro
echo date('d/m/Y'); # 09/09/2022
```
&nbsp; 
```php
<?php

echo 'Hoje é: '.date('d-m-Y')."<br>"; # Hoje é: 09-09-2022

echo 'Daqui dez dias será: '.date('d-m-Y', strtotime('+10 day')); # Daqui dez dias será: 19-09-2022

echo 'Daqui três meses será: '.date('d-m-Y', strtotime('+3 month')); # Daqui três meses será: 09-12-2022

echo 'Daqui dois anos será: '.date('d-m-Y', strtotime('+2 year')); # Daqui dois anos será: 09-09-2024
```
&nbsp;    

**4- Função `mktime()`:**  

*Seus parâmetros são, respectivamente, hora - minuto - segundo - mês - dia - ano*
```php
<?php

$data = mktime(02,30,10,9,01,2022);
echo "O processo foi protocolado em ".date('d/m/Y' .'à\s'. 'h:i:s', $data);

# O processo foi protocolado em 01/09/2022 às 02:30:10
```