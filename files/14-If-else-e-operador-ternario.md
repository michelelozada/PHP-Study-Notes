> **Estrutura de controle - If else e operador ternário**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;     
```php
<?php
	
// 1 - Utilizando a estrutura if-else: 
	
$media = 65;

if($media >= 70)
{
	$status = 'Aluno(a) foi aprovado(a) no curso.';
} 
else 
{
	$status = 'Aluno(a) terá de realizar o exame final.';
}
echo 'Status: ' . $status;	
# Retorna: Status: Aluno(a) terá de realizar o exame final.


// 2 - Utilizando o operador ternário (para o mesmo exemplo acima):

$media = 65;

$status = ($media >= 70) ? 'aprovado': 'reprovado';
echo 'Status do aluno: ' . (($media >= 70) ? 'aprovado' : 'reprovado');

# Retorna: Status do aluno: reprovado
```