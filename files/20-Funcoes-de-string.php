/*
 *  Funções de string
 *  Repositório: Lógica de Programação e Algoritmos em PHP
 *  GitHub: @michelelozada
 */


<?php 

$citacao = 'um pequeno passo para o Homem, um gigantesco passo para a Humanidade'; 
	
// 1 - Retorna quantidade de caracteres (com espaços) de uma string: função strlen()
echo strlen($citacao); # Retorna: 69


// 2 - Contando o número ocorrências de uma substring dentro da string: função substr_count()
// Att! Case-sensitive
echo substr_count($citacao,'passo'); # 2


// 3 - Retorna a primeira ocorrência de uma letra na string: função stripos() 
// Obs: Case-insensitive
echo stripos($citacao,'o'); # 9


// 4 - Retorna a última ocorrência de uma letra na string: função strripos() 
// Obs: Case-insensitive
echo strripos($citacao,'o'); # 50


// 5 - Converte uma string para minúsculas: função strlower() 
echo strtolower($citacao); 
# um pequeno passo para o homem, um gigantesco passo para a humanidade


// 6 - Converte uma string para maiúsculas: função strtoupper() 
echo strtoupper($citacao); 
# UM PEQUENO PASSO PARA O HOMEM, UM GIGANTESCO PASSO PARA A HUMANIDADE


// 7 - Retorna a string com seu primeiro caractere maiúsculo: função ucfirst()
echo ucfirst($citacao);
# Um pequeno passo para o Homem, um gigantesco passo para a Humanidade


// 8 - Retorna a  string com o primeiro caractere de cada palavra em maiúsculo: função ucwords()
echo ucwords($citacao);
# Um Pequeno Passo para O Homem, Um Gigantesco Passo Para A Humanidade


// 9 - Substitui todas as ocorrências da string de procura com a string de substituição: função str_replace()
echo str_replace ('um gigantesco passo para a Humanidade','one giant leap for Mankind',$citacao);
# um pequeno passo para o Homem, one giant leap for Mankind


// 10 - Retorna determinada parte da string: função substr()
echo substr($citacao,31); # um gigantesco passo para a Humanidade
echo substr($citacao,-12); # a Humanidade
echo substr($citacao,-34,16); # gigantesco passo