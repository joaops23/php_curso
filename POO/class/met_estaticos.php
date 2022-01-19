<?php

//static mehotds - método stático
// é uma forma fácil de criar um método ou um objeto sem precisar necessáriamente criar uma classe

class Documento {
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($num){
        
        //acessando o método estático
        $resultado = Documento::validarCPF($num);

        if($resultado === false) {
            throw new Exception("CPF informado não é válido!", 1);
        }

        $this->numero = $num;
    }

    // Método estático 
    public static function validarCPF($cpf):bool{        
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

//$cpf = new Documento();
//$cpf->setNumero("49472923852");

//var_Dump($cpf->getNumero());

// Chamando o método sem precisar instanciar a classe
var_dump(Documento::validarCPF("49472923852"));
?>