> **Funções matemáticas**     
> Repositório: Lógica de Programação e Algoritmos em PHP   
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
```php	
<?php 
   
// 1. Calcula uma base elevada à potência do expoente: função pow()
echo pow(2,3); # Retorna: 8
		
		
// 2. Calcula a raiz quadrada de um dado valor: função sqrt()
echo sqrt(25); # 5


// 3. Retornando somente a parte inteira de uma variável: função intval()
echo intval(3.14); # 3
	
	
// 4. Arrendondando valores
$preco1 = 250.30;
$preco2 = 257.55;
	
// 4.1. Arredonda valores para cima: função ceil()
echo ceil($preco1);  # 251


// 4.2 Arredonda valores para baixo: função floor() 
echo floor($preco1); # 250


// 4.3. Arredonda um número float: função round()
echo round($preco1); # 250
echo round($preco2); # 258
		
		
// 5. Retorna o valor absoluto de um número: função abs()
echo abs(-10); # 10
echo abs(-5.5); # 5.5
		
		
// 6. Gera um número inteiro aleatório: função rand()
echo rand();
# 1ª saída: 1927646153 | 2ª saída: 513050103 | 3ª saída: 118736831
		
// Gerando um número inteiro aleatório, porém dentro de um intervalo
echo rand(1,10);
# 1ª saída: 6 | 2ª saída: 9 | 3ª saída: 3
```