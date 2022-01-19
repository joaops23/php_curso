<?php

    
    //após o :<tipo de dado> você configura qual tipo de dado deseja que seja retornado 
    function soma(int ...$valores):string{
        return array_sum($valores);
    }

    echo var_dump(soma(2,2));
    echo "<br>";
    echo soma(25,33);
    echo "<br>";

    echo soma(1.5,3.2);
    echo "<br>";
?>