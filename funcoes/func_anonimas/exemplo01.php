<?php 
    // Não tem nome na função
    // Não tem return



//uma função que apenas basta a execução dela, nõa necessita ser nomeada
function test($callback){

    //processo lento 
    //Esse processo lento pode ser no caso a reprodução de um vídeo, onde, quando finalizar esse processo a função abaixo será executada sem dar timeout

    $callback();

}

test(function(){
    echo "terminou!";
});
?>