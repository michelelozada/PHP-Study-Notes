> **Herança**     
> Repositório: PHP - Notas de estudo *(PHP Orientado a Objetos)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
Herança é um recurso que permite que classes derivadas tenham acesso às características (atributos e 
métodos) de uma classe base previamente criada.   
&nbsp;   
As classes derivadas são chamadas de *subclasses* ou *classes filhas*; já as classes que originaram as subclasses 
são chamadas de *superclasses* ou *classes pai*.
&nbsp;
     
&nbsp;   
**1 - Criação da classe base**
```php
<?php
	
class Pessoa{
	protected $nome;
	protected $cpf;
	protected $email;
		
	public function cadastrarUsuario(){
		echo "{$this->nome} (CPF nº: {$this->cpf} e email:{$this->email}) acaba de ser cadastrado no sistema.<br>";
	}
	
	public function getNome($n){
		$this->nome = $n;
	}	
	
	public function getCpf($cpf){
		$this->cpf = $cpf;	
	}	
	
	public function getEmail($e){
		$this->email = $e;	
	}	
}
```	
&nbsp;

&nbsp;   
**2 - Criação das classes derivadas, com as características exclusivas a cada uma delas**  
&nbsp;  
*Note que o termo **`extends`** determina que as classes *aluno* e *professor* irão herdar as características da 
classe pessoa.*
```php
<?php
	
class Aluno extends Pessoa{
	protected $dataMatricula; 
	protected $numeroMatricula; 
	protected $curso; 
	
	public function getCurso($c){
		$this->curso=$c;
	}
	
	public function inscreverSeEmCurso(){
		echo "{$this->nome} acaba de efetuar sua inscrição no curso de {$this->curso}.<br>";
	}
}	

# Criando o objeto aluno
$aluno = new Aluno();

# Acessando os atributos do objeto e definindo seus valores
$aluno->getNome('Enzo Marcondes');
$aluno->getCpf('999.999.999-99');
$aluno->getEmail('enzo@email.com');
$aluno->getCurso('Análise e Desenvolvimento de Sistemas');

# Chamando os métodos
$aluno->cadastrarUsuario();
# Retorna: Enzo Marcondes (CPF nº: 999.999.999-99 e email:enzo@email.com) acaba de ser cadastrado no sistema.

$aluno->inscreverSeEmCurso();
# Retorna: Enzo Marcondes acaba de efetuar sua inscrição no curso de Análise e Desenvolvimento de Sistemas.
```
&nbsp;
&nbsp;   
```php
<?php
	
class Professor extends Pessoa{
	protected $dataAdmissao;
	protected $salario;
	protected $disciplina;
	
	public function getDisciplina($d){
		$this->disciplina = $d;
	}
	
	public function consultaDisciplina(){
		echo "O professor {$this->nome} leciona a disciplina {$this->disciplina}.";
	}
}	

# Criando o objeto professor
$professor = new Professor();

# Acessando os atributos do objeto e definindo seus valores
$professor->getNome('João Mattos');
$professor->getCpf('111.111.111-11');
$professor->getEmail('joao@email.com');
$professor->getDisciplina('Engenharia de Software');

# Chamando os métodos
$professor->cadastrarUsuario();
# Retorna: João Mattos (CPF nº: 111.111.111-11 e email:joao@email.com) acaba de ser cadastrado no sistema.

$professor->consultaDisciplina();
# Retorna: O professor João Mattos leciona a disciplina Engenharia de Software.
```