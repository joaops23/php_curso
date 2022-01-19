<?php 

//Métodos e atributos
//Métodos são funções(basicamente)

//método private
class Carro {
    private $modelo;
    private $motor;
    private $ano; 

    // Funções para resgatar o valor das variáveis privadas da classe
    // Getters
    public function getModelo(){

        return $this->modelo;
    }

    
    public function getMotor():float{
        return $this->motor;
    }

    public function getAno():int{
        return $this->ano;
    }
    // Fim funções Getters



    // Funções para setar valor nas variáveis privadas da classe
    // Setters
    public function setModelo($modelo){
        // Ao chamar a função setModelo, será requisitado o(s) Parâmetro(s) para que posssa setar a variável $this->modelo pelo método private
        $this->modelo = $modelo;

    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    // Fim funções Setters

        //$this->modelo, é um atributo
        //$modelo é uma variável, visível dentro do escopo da função



    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getano()
        );
    }
}


$carro = new carro();
$carro->setModelo("Civic");
$carro->setMotor("1.5");
$carro->setAno(2019);
$carro->exibir();

var_dump($carro->exibir());

?>