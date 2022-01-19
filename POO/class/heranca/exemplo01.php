<?php

class Documento {
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

class CPF extends Documento {
    public function validar():bool
    {
        //valida CPF
        $numeroCPF = $this->getNumero();
        return true;
    }
}


$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br>";

var_dump($doc->getNumero());

?>