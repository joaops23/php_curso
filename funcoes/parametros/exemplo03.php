<?php
//parâmetros por valor e por referência

$a = 10;

function trocavalor($a){
    $a += 50 ;

    return $a;
}

//passagem de parâmetro por valor
echo trocavalor($a);  //A variável passada como parâmetro permanece com seu valor inicial fora do escopo da função.
echo "<br>";

echo $a;
echo "<br>";

echo "<br>";

//passagem de parâmetro por referência
function trocavalor_ref(&$a){ //Neste método é apontado o endereço da variável a ser alterada e então a função executará dentro daquele endereço, alterando-o.
    $a += 50 ;

    return $a;
}

echo trocavalor_ref($a);
echo "<br>";
echo $a;

?>