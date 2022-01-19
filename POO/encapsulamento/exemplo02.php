<?php

class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }
}

class Programador extends Pessoa {

    public function verDados(){

        //echo get_Class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        // como este atributo é privado, ele não está disponível na classe Programador
        echo $this->senha . "<br>";

    }

} 


$obj = new Programador();

$obj->verDados();

?>