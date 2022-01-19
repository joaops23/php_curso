<?php

abstract class Animal {
    public function Falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar(){
        return "Late";
    }
    
}

class Gato extends Animal {
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }

    public function mover()
    {
        return "Voa e " . parent::mover(); //concatena o funcionamento da classe pai com o comportamento da classe filho
    }
}


$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover();

echo "<br><br>";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover();

echo "<br><br>";

$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->mover();




?>