<?php

function ola(){
    $argumentos = func_get_args(); // resgata todos os argumentos passados para a função, sem ter eles pré-determinados

    return $argumentos;
}

var_dump(ola("Bom dia", 10));