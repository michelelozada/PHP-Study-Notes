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