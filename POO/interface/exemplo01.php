<?php 

interface veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements veiculo {

    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " km/h";

    }

    public function frenar($velocidade){
        echo "O veículo Frenou até " . $velocidade . " km/h";

    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();

$carro->trocarMarcha(1);

?>