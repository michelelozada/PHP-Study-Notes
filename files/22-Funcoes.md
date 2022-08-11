> **Funções**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
```php	
<?php
	
/*
Criar uma função para cálculo de notas de um aluno, sendo que:
- A atividade prática deve ter peso de 40%.
- O exame final deve ter peso de 60%.
- Para o exemplo considerar as notas do aluno: 7.5 (atividade prática) e 6.5 (exame final).
*/

# A função
function retornarMedia($notaAtividadePratica, $notaExameFinal){
	return ($notaAtividadePratica * 0.4 + $notaExameFinal * 0.6);
}

# Chamada da função
echo 'A média final obtida pelo(a) aluno(a) foi '. retornarMedia(7.5, 6.5);
# Retorna: A média final obtida pelo(a) aluno(a) foi 6.9.
```
&nbsp;

&nbsp;
**Formas de envio de parâmetros**   
```php
<?php  

// 1 - Passagem de parâmetros por valor
function teste($x)
{
    $x += 2;
    echo $x;
}
$a = 3;
teste($a); # Retorna: 5
echo $a; # Retorna: 3 (valor da variável $a não foi alterado)


// 2 - Passagem de parâmetros por referência

function teste(&$x)
{
    $x +=2;
    echo $x;
}    
$a = 3;
teste($a); // retorna: 5
echo $a; // retorna: 5 (a alteração em $x alterou o valor de $a)
```