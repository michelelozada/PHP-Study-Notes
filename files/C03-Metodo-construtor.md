> **Método construtor**     
> Repositório: PHP - Notas de estudo *(PHP Orientado a Objetos)*    
> GitHub: @michelelozada
&nbsp;
     
&nbsp;   
**Método construtor**  
 * é um mecanismo de inicialização do objeto utilizado no momento da sua criação. 
 * é invocado apenas no momento da instanciação. 
&nbsp;
     
&nbsp;  
```php
<?php  

# Criando a classe
class Veiculo{
    private $marca;
    private $modelo;
    private $cor;
    private $disponibilidade;

    # Criando o método construtor
    public function __construct($ma, $mo, $c, $d){
        $this->setMarca($ma);
        $this->setModelo($mo);
        $this->setCor($c);
        $this->setDisponibilidade($d);
    }
	
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

# Instanciando a classe e invocando o método construtor
$v1 = new Veiculo("Volkswagen", "Golf", "Prata", true);

# Invocando o métodos get para retorno de valores
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

&nbsp;

<div align="center">
<a href="https://github.com/michelelozada/PHP-Study-Notes">[Voltar à tela inicial do repositório]</a>
</div>