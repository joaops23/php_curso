<?php

$conn = new mysqli("127.0.0.1","root","","dbphp7");

//tratamento de erro de conexão 
if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}


// PREPARAÇÃO DO MÉTODO 
//prepara a query que o obj conn vai receber, as interrogações funcionam como parâmetros de funções
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin ,dessenha) VALUES(?, ?)");


// Populando os parametros
$stmt->bind_param('ss', $login, $pass);

$login = "user";
$pass = "12345";
// FIM PREPARAÇÃO

//execução do comando 
$stmt->execute();



?>