<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sendeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad->registrarVenda();

?>