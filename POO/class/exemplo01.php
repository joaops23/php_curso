<?php
// criando uma classe
class Pessoa {

    public $nome;

    public function falar(){
        return "O meu nome é " . $this->nome;
        // $this, é um atributo nativo que representa a classe instanciada e aponta para variáveis visíveis dentro da classe.
    }
    
}


$glaucio = new Pessoa();
$glaucio->nome = "Gláucio Daniel";
echo $glaucio->falar();
?>