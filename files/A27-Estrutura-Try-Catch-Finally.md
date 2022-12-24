> **Estrutura Try-Catch-Finally**  
> Repositório: PHP - Notas de estudo *(Lógica de Programação)*        
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   

**Estrutura Try-Catch**  
Para capturar eventuais exceções, deve ser usado o bloco `try-catch`.
&nbsp;   
```php
<?php  
function divisao($a, $b) {
    if ($b == 0) {
        throw new Exception('Não é possível dividir um número por zero');
    }
    return $a / $b;
};
// O código dentro deste bloco abaixo pode estar sujeito à exceção
try {
    echo 'Resultado da divisão: ' . divisao(5,0);
} 
// Caso ocorra alguma exceção, o bloco abaixo será executado
catch (Exception $e) { // Nota: `Exception` é o tipo da exceção; o nome da variável que acessa a exceção é $e
    echo 'Erro gerado: '.  $e->getMessage();
}

/* Output:
Erro gerado: Não é possível dividir um número por zero
*/
```
&nbsp;
&nbsp;  
**Estrutura Try-Catch-Finally**  
Aqui, o código no bloco `finally` sempre será executado, independentemente de uma exceção ter sido capturada ou não.
&nbsp;   
```php
<?php
function divisao($a, $b) {
    if ($b == 0) {
        throw new Exception('Não é possível dividir um número por zero');
    }
    return $a / $b;
};

try {
    echo 'Resultado da divisão: ' . divisao(10,5);
} 
catch (Exception $e) {
    echo 'Erro gerado: '.  $e->getMessage();
}
finally {
    echo "\nFim da operação de divisão. \nPrograma encerrado.";
}

/* Output:
Resultado da divisão: 2
Fim da operação de divisão. 
Programa encerrado.
*/
```

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>