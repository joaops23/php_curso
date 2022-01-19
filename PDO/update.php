<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "padrao", "1045");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

$login = "João";
$password = "12345678";
$id= '1';

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo " Dados alterados OK!";
?>
