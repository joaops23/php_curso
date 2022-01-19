<?php

// Método mágico === método construtor
// são métodos que são declarados e executados sem que necessite chama-los durante a execução 


// Método construtor

// métodos construtores são criados da seguinte forma


class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;


    // método construtor
    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        

    }

    //destrói o objeto e libera a memória
    //public function __destruct() {
        //var_dump("DESTRUIR");
//    }

    //quando o objeto é chamado no echo e não são passados os parâmetros
    public function __toString()
    {
        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }
}


var_dump($newEndereco = new Endereco("Rua virginia Torezin Forte", '256', 'São Paulo'));

//unset($newEndereco);

echo $newEndereco;

?>