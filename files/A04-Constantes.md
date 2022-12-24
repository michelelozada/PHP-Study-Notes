> **Constantes**     
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*      
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**Constantes**
* Não podem ter seus valores alterados após a sua definição;
* São declaradas através da função `declare()`;
* Diferentemente das variáveis, não precisam ter o cifrão no início e, via de regra, são identificadas por nomes em caracteres maiúsculos.
&nbsp;
     
&nbsp;   
```php
<?php 

define("NOME","Enzo");
define("IDADE",5);
define("MATRICULADO",true);
define("DISCIPLINAS", ['Língua Portuguesa', 'Matemática', 'Geografia', 'História', 'Ciências']);

echo "Nome do aluno: "  . NOME ."\n";
echo "Idade do aluno: " . IDADE ." anos\n";
echo "Staus do aluno: ";
if (MATRICULADO):
    echo "matriculado" ."\n";
else:
    echo "não matriculado" ."\n";
endif;
$str = implode(", ", DISCIPLINAS);
echo 'Disciplinas: ' .$str;

/* Retorna: 
Nome do aluno: Enzo
Idade do aluno: 5 anos
Staus do aluno: matriculado
Disciplinas: Língua Portuguesa, Matemática, Geografia, História, Ciências
*/
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>