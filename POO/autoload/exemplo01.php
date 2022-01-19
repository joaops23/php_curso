<?php 

// função __autoload foi removida no PHP8

// SPL = Standard PHP Library


function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse. ".php");
    }
}

spl_autoload_register("incluirClasses");

//usando função anonima
spl_autoload_register(function($nomeClasse){
    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
    
});


$carro = new DelRey();

$carro->acelerar(80);

?>