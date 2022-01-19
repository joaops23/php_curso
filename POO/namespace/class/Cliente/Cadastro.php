<?php

namespace Cliente;

class Cadastro  extends \Cadastro{

    public function registrarVenda(){
        echo "Foi registrada sua venda!" . $this->getNome();
    }

}