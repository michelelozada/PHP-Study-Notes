/*
 *  Operadores lógicos
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */
 
 
<?php
// 1. Conectivo lógico 'AND' ($a && $b ou $a and $b)
// Tem seu valor lógico verdadeiro somente quando todas as preposições forem verdadeiras
// Obs: O operador && opera com maior precedência sobre o operador and.

// 1.1. Representação da tabela verdade para o operador AND:
echo true && true; # Retorna: true
echo true && false; # false
echo false && true; # false
echo false && false; # false
	

//2. Conectivo lógico 'OR' ($a || $b ou  $a or $b)
// Tem seu valor lógico verdadeiro quando ao menos uma das preposições for verdadeira	
// Obs: O operador || opera com maior precedência sobre o operador or.

// 2.1. Representação da tabela verdade para o operador OR:
echo true || true; # Retorna: true
echo true || false; # true
echo false || true; # true
echo false || false; # false


// 3. Conectivo lógico 'NOT' (!$a)
// Tem o efeito de negar o valor lógico da proposição original

// 3.1. Representação da tabela verdade para o operador NOT:
echo !true; # Retorna: false
echo !false; # true


// 4. Conectivo lógico 'XOR' ($a xor $b)
// // Tem seu valor lógico verdadeiro se apenas um variável for verdadeiras. Se duas forem verdadeiras ou não hover expressão verdadeira, resulta false.
echo true xor true; # false
echo true xor false; # Retorna: true
echo false xor true; # true
echo false xor false; # false


// 5. Expressões lógicas diversas:
echo (3 < 2) && (2 == 2); # Retorna: false
echo (1 + 1 == 2) && (strlen("bola") == 4); # true
echo (1 + 1 > 2) && (4 != 5); # false
echo (true || false) && true; # true
echo (true && false) && true; # false

echo (2 > 1) || (3 < 7);  # Retorna: true
echo (1 + 1 == 2) || (strlen("bola") == 4); # true
echo (1 + 1 != 2) || (strlen("bola") == 4); # true
echo (true || false) || true; # true
echo (true && false) || true; # true

echo !(3 > 2); # Retorna: false
echo !(7 < 5); # true
echo !(4 <> 2) && (3 < 6); # false
echo !true || false; # false
echo !true || true; # true
echo !false || true; # true
echo !true && false; # false


// 6. Outros exemplos:

//6.1.
$idade = 19;
$carteiraCNH = true;

if($idade >= 18 && $carteiraCNH == true){
    echo 'Parabéns, você já pode dirigir!';   
} else if ($idade >= 18 && $carteiraCNH == false) {
    echo 'Você já tem idade para solicitar a CNH, porém não a tem; portanto, ainda não pode dirigir.';   
} else {
	echo 'Você ainda não tem idade mínima para tirar a CNH, então não pode dirigir.'; 
} 
# Retorna: Parabéns, você já pode dirigir!

$idade = 19;
$carteiraCNH = false;
# Retorna: Você já tem idade para solicitar a CNH, porém não a tem; portanto, ainda não pode dirigir

$idade = 17;
$carteiraCNH = false;
# Retorna: Você ainda não tem idade mínima para tirar a CNH, então não pode dirigir.


//6.2.
$gestante = true;
$idade = 26;

if ($gestante == true || $idade >= 60){
    echo 'Liberar senha para atendimento preferencial.';
} else {
    echo 'Liberar senha para atendimento padrão.';
} # Retorna: Liberar senha para atendimento preferencial.


//6.3.
$comprovanteVacina = true;

if($comprovanteVacina){ # A condição ao lado é equivalente a: if($comprovanteVacina == true)
	echo 'Entrada permitida.';		
}else{
	echo 'Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.';
} # Retorna: Entrada permitida.


//6.4.
if(!$comprovanteVacina){  # A condição ao lado é equivalente a: if($comprovanteVacina != true)
	echo 'Entrada permitida.';				
}else{
	echo 'Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.';
} # Lamentamos, mas sem apresentar o comprovante, você não pode entrar no salão.