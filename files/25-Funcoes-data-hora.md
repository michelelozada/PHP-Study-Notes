> **Funções de data e hora**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
```php	
<?php 
	
// 1. Utilizando a função getdate para recuperar informações de data e hora (irá retornar um array associativo):
$agora = getdate();
//print_r($agora);


// 2. Para usar GMT/fuso horário diferente do padrão, é preciso acrescentar a seguinte função: 
date_default_timezone_set('Brazil/East'); 
$agora = getdate();
print_r($agora);
    

// 3. Criando elementos do array associativo acima: 
echo $hora          = $agora['hours'];  # Retorna: 19
echo $minuto        = $agora['minutes']; # 10
echo $segundo       = $agora['seconds']; # 19
echo $diaNumerico   = $agora['mday']; # 3
echo $diaDaSemana   = $agora['weekday']; # Sunday
echo $mesNumerico   = $agora['mon']; # 7
echo $mesTexto      = $agora['month']; # July
echo $ano           = $agora['year']; # 2022

echo 'O relógio agora marca '. $hora .':'. $minuto .':' . $segundo . ', neste dia ' . $diaNumerico . '/' . $mesNumerico . '/' . $ano . '.' ;
# Retorna: O relógio agora marca 19:10:19, neste dia 3/7/2022.
   
echo 'Hoje é ' . $diaSemana . ' (dia ' . $diaNumerico . ' de ' . $mesTexto . ' de ' . $ano . ').' ;
# Hoje é Sunday (dia 3 de July de 2022).


// 4 . Para exibir em português o mês e dia da semana:

// 1º É preciso acrescentar a seguinte função: 
setlocale(LC_TIME,"portuguese"); 

// 2º É preciso substutuir os elementos referentes ao mês e dia da semana da seguinte forma: 
echo $mesTexto = strftime("%B");  # full month name, based on the locale
echo $diaTexto  = strftime("%A"); # a full textual representation of the day, based on the locale

echo ucfirst(strftime('%A')) . ', ' . $diaNumerico . ' de ' . strftime("%B") . ' de ' . $ano . '.' ;
# Retorna: Domingo, 3 de julho de 2022.


// 5. Checando se uma data é válida ou não - função checkdate():

$dia = 30;
$mes = 2;
$ano = 2022;
if(checkdate($mes,$dia,$ano)){
	echo ('Data válida!');	
} else {
	echo ('Esta data é inválida.'); 
}
// Retorna: Esta data é inválida.

$dia = 29;
$mes = 2;
$ano = 2024;
if(checkdate($mes,$dia,$ano)){
	echo ('Data válida!');	
} else {
	echo ('Esta data é inválida'); 
}
// Retorna:Data válida! => (2024 será ano bissexto)

 
// 6. Determinando o intervalo de tempo entre duas datas informadas:
$data1 = new DateTime('2020-12-31'); # data mais antiga
$data2 = new DateTime('2022-07-03'); # data mais recente
$intervalo = $data1 ->diff($data2);
print_r ($intervalo);

/* Retorna:
DateInterval Object
(
    [y] => 1
    [m] => 6
    [d] => 2
    [h] => 0
    [i] => 0
    [s] => 0
    [f] => 0
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 0
    [days] => 549
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)
*/

// Pegando dados do objeto acima:
# Usar %a para retorno do intervalo de dias passados (não use %days):
print_r('O intervalo de tempo decorrido de uma data informada para outra é de '. $intervalo->format('%a') . ' dias.');
# Retorna: O intervalo de tempo decorrido de uma data informada para outra é de 549 dias.

print_r ('Ou seja: já se passou '. $intervalo->format('%y') . ' ano, ' . $intervalo->format('%m') . ' meses e ' . $intervalo->format('%y')  . ' dia.' );
# Ou seja: já se passou 1 ano, 6 meses e 1 dia.

// Invertendo as datas: 
$data1 = new DateTime('2022-07-03');  # data mais recente
$data2 = new DateTime('2020-12-03');  # data mais antiga
$intervalo = $data1 ->diff($data2);
print_r ($intervalo);

// Irá retonar: [invert] => 1, significando que o intervalo é negativo. Portanto para exibir este resultado use %r:
print_r('O intervalo de tempo decorrido de uma data informada para outra é de '. $intervalo->format('%r%a') . ' dias.');
# Retorna: O intervalo de tempo decorrido de uma data informada para outra é de -577 dias.
```