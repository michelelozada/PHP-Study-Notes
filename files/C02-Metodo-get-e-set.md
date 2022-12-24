> **Métodos Get e Set**     
> Repositório: PHP - Notas de estudo *(PHP Orientado a Objetos)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;  
* Os métodos **get** e **set** obtêm/retornam e estabelecem/definem, respectivamente, as propriedades em uma classe.
&nbsp;  
&nbsp;  
* Para trabalhar dentro de métodos contidos em uma classe - acessando as variáveis declaradas na classe,
porém fora do método -, deve ser utilizada a palavra reservada **`this`** (visto que não existe o conceito de 
variável global para classes). 
&nbsp;  
&nbsp;  
*  Dessa forma, **`$this`** é uma variável especial de auto-referência que apontará para o objeto atual, 
e que acessa as propriedades e/ou chama outros métodos da classe em que ela se encontra.
&nbsp;  
&nbsp;  

```php
<?php  

# Criando a classe
class Veiculo{
    # Criando os atributos
    private $marca;
    private $modelo;
    private $cor;
    private $disponibilidade;

    # Criando os métodos set 
    public function setMarca($ma){
	    $this->marca = $ma;	
    }	

    public function setModelo($mo){
	    $this->modelo = $mo;
    }

    public function setCor($c){
	    $this->cor = $c;
    }	

    public function setDisponibilidade($d){
	    $this->disponibilidade = $d;
    }	

    # Criando os métodos get 
    public function getMarca(){
	    return $this->marca;
    }

    public function getModelo(){
	    return $this->modelo;
    }

    public function getCor(){
	    return $this->cor;
    }

    public function getDisponibilidade(){
	    return $this->disponibilidade;
    }
}

# Instanciando a classe
$v1 = new Veiculo();

# Invocando o método set para a definição de valores
$v1->setMarca("Volkswagen");
$v1->setModelo("Golf");
$v1->setCor("Prata");
$v1->setDisponibilidade(true);

# Invocando o métodos get para o retorno de valores
echo "Marca do veículo: {$v1->getMarca()} <br>";
echo "Modelo: {$v1->getModelo()} <br>";
echo "Cor: {$v1->getCor()} <br>";
$available = $v1->getDisponibilidade();
$status = ($available == true) ? 'sim': 'não';
echo "Disponível para venda: $status";

/* Retorna:
Marca do veículo: Volkswagen
Modelo: Golf
Cor: Prata
Disponível para venda: sim
*/
```