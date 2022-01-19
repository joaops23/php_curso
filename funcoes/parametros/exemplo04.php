<?php
    $pessoa = array(
        'nome'=> 'João',
        'idade'=>20
    );

    // o & aponta para o endereço de memória, fazendo ser possível a alteração do valor armazenado
    foreach ($pessoa as &$value) {
        if(gettype($value) == 'integer') $value += 10;
    }

print_r($pessoa);
?>