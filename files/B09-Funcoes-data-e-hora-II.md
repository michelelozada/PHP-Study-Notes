> **Funções de data e hora (II)**     
> Repositório: PHP - Notas de estudo *(Temas gerais)*     
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
**1 - Recuperando informações de data e hora: função `getdate()`:**
```php	
<?php 

# Configurando um fuso horário diferente do padrão
date_default_timezone_set('America/Sao_Paulo');

$agora = getdate();
print_r($agora);

/* Retorna: 
Array
(
    [seconds] => 54
    [minutes] => 27
    [hours] => 18
    [mday] => 16
    [wday] => 5
    [mon] => 9
    [year] => 2022
    [yday] => 258
    [weekday] => Friday
    [month] => September
    [0] => 1663363674
)
*/
```
&nbsp;
&nbsp;   
*Criando elementos do array gerado com a função **`getdate()`** acima:* 
```php	
<?php 

$hora        = $agora['hours'];  
$minuto      = $agora['minutes']; 
$segundo     = $agora['seconds']; 
$diaNumerico = $agora['mday']; 
$diaTextual  = $agora['weekday']; 
$mesNumerico = $agora['mon']; 
$mesTextual  = $agora['month']; 
$ano         = $agora['year']; 

echo 'O relógio agora marca '. $hora .':'. $minuto .':' . $segundo . ', neste dia ' . $diaNumerico . '/' . $mesNumerico . '/' . $ano . '.' ;
# Retorna: O relógio agora marca 18:27:54, neste dia 16/9/2022.
   
echo 'Hoje é ' . $diaTextual . ' (dia ' . $diaNumerico . ' de ' . $mesTextual . ' de ' . $ano . ').';
# Retorna: Hoje é Friday (dia 16 de September de 2022).
```
&nbsp;
&nbsp;   
*Para exibir em português o mês e dia da semana:*
```php	
<?php 

# 1º) É preciso acrescentar a seguinte função: 
setlocale(LC_TIME,"portuguese"); 

# 2º) É preciso substutuir os elementos referentes ao mês e dia da semana da seguinte forma: 
$mesTextual = strftime("%B");  
$diaTextual = strftime("%A"); 

echo ucfirst(strftime('%A')) . ', ' . $diaNumerico . ' de ' . strftime("%B") . ' de ' . $ano . '.' ;
# Retorna: Sexta-feira, 16 de setembro de 2022.
```
&nbsp;
&nbsp;   
**3 - Checando se uma data é válida ou não: função `checkdate()`:**
```php	
<?php 

$dia = 30;
$mes = 2;
$ano = 2022;
if(checkdate($mes,$dia,$ano)):
	echo ('Data válida!');	
else:
	echo ('Esta data é inválida.'); 
endif;
# Retorna: Esta data é inválida.

$dia = 29;
$mes = 2;
$ano = 2024;
if(checkdate($mes,$dia,$ano)):
	echo ('Data válida!');	
else:
	echo ('Esta data é inválida'); 
endif;
# Retorna: Data válida! => (2024 será um ano bissexto)
```
&nbsp;
&nbsp;   
**Extra - Determinando o intervalo de tempo entre duas datas informadas com o método `DateTime::diff()`**
```php	
<?php 

$data1 = new DateTime('2020-12-31'); # data mais antiga
$data2 = new DateTime('2022-09-16'); # data mais recente
$intervalo = $data1 ->diff($data2);
print_r ($intervalo);

/* Retorna:
DateInterval Object
(
    [y] => 1
    [m] => 8
    [d] => 16
    [h] => 0
    [i] => 0
    [s] => 0
    [f] => 0
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 0
    [days] => 624
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)
*/
```
&nbsp;
&nbsp;  
**Pegando dados do objeto acima:**
```php	
<?php 

// Usar %a para retorno do intervalo de dias passados (não use %days):
print_r('O intervalo de tempo decorrido de uma data informada para outra é de '. $intervalo->format('%a') . ' dias.');
# Retorna: O intervalo de tempo decorrido de uma data informada para outra é de 624 dias.

print_r ('Ou seja: já se passou '. $intervalo->format('%y') . ' ano, ' . $intervalo->format('%m') . ' meses e ' . $intervalo->format('%y')  . ' dia.' );
# Ou seja: já se passou 1 ano, 8 meses e 1 dia.
```
&nbsp;
&nbsp;  
**Agora, invertendo as datas:** 
```php	
<?php 

$data1 = new DateTime('2022-07-03');  # data mais recente
$data2 = new DateTime('2020-12-03');  # data mais antiga
$intervalo = $data1 ->diff($data2);
print_r ($intervalo);
/* Retorna:
DateInterval Object
(
    [y] => 1
    [m] => 7
    [d] => 0
    [h] => 0
    [i] => 0
    [s] => 0
    [f] => 0
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 1
    [days] => 577
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)

# O retorno [invert] => 1 significa que o intervalo é negativo. Portanto para exibir este resultado, usar %r:

print_r('O intervalo de tempo decorrido de uma data informada para outra é de '. $intervalo->format('%r%a') . ' dias.');
# Retorna: O intervalo de tempo decorrido de uma data informada para outra é de -577 dias.
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>