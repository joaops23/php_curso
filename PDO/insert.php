<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "padrao", "1045");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "root";
$password = "";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo " inserido OK!";
?>