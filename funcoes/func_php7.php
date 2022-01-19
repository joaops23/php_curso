<?php

    //Semelhante a função func_get_args(), porém mais simplificado.
    //resgata todos os valores dos parâmetros passados.
    function soma(int ...$valores){
        return array_sum($valores);
    }

    echo soma(2,2);
    echo "<br>";
    echo soma(25,33);
    echo "<br>";

    //ele só receberá o número inteira do parâmetro
    echo soma(1.5,3.2);
    echo "<br>";
?>