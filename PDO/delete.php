<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "padrao", "1045");

$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = :ID");

$id= '1';

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";
?>
