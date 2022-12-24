> **Classes, objetos, atributos e métodos**     
> Repositório: PHP - Notas de estudo *(PHP Orientado a Objetos)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;    
**Classe**  
 * é o projeto de um objeto.  
 * define os atributos *(as propriedades)* e os métodos *(ações ou eventos)* comuns aos objetos que serão criados a partir dela.  
&nbsp;    	

**Objeto**     
 * é criado a partir da instanciação de uma classe.  
 * é uma entidade concreta ou abstrata do mundo real.  
 * é único, sendo que cada objeto criado a partir de uma mesma classe estará alocado em um espaço diferente da memória.    
&nbsp;    	

**Membros de uma classe**  
 * são os atributos e os métodos declarados no corpo da classe, sendo que os objetos a serem instanciados a 
 partir desta classe possuirão estes mesmos membros (porém sempre alocados em espaços diferentes da memória).  
 * para serem acessados, deve ser utilizado o operador **`->`**, antecedido da variável a que foi atribuído o
 objeto no momento da sua criação.
&nbsp;
     
&nbsp;   
```php
<?php

# Criando uma classe
class Cachorro{
    # Definindo os atributos da classe
    public $nome;
    public $raca;
    public $desperto;
    
    # Definindo os métodos da classe
    public function acordar(){
		$this->desperto = true;   
    }
    
    public function ouvirVisita(){
	    if($this->desperto == false):
            $this->acordar();
            echo $this->nome . ", da raça " . $this->raca . ", acabou de acordar e latir para a visita.<br>";
        else:
            echo $this->nome . ", da raça " . $this->raca . ", já estava acordado e latiu assim que a visita chegou na casa.<br>";
        endif;	
    }
}

# Instanciação da classe
$c1 = new Cachorro();
$c2 = new Cachorro();

# Acessando os atributos dos objetos criados e definindo seus valores. Chamando os métodos também.
$c1->nome = "Pingo";
$c1->raca = "Pinscher";
$c1->desperto = false;
$c1->ouvirVisita();
# Retorna: Pingo, da raça Pinscher, acabou de acordar e latir para a visita.

$c2->nome = "Nick";
$c2->raca = "Dachshund";
$c2->desperto = true;
$c2->ouvirVisita();
# Retorna: Nick, da raça Dachshund, já estava acordado e latiu assim que a visita chegou na casa.


# Exibindo o estado atual dos objetos
print_r($c1);
/* Retorna:
Cachorro Object
(
    [nome] => Pingo
    [raca] => Pinscher
    [desperto] => 1  
)
*/ 

print_r($c2);
/* Retorna:
Cachorro Object
(
    [nome] => Nick
    [raca] => Dachshund
    [desperto] => 1
)
*/ 
```