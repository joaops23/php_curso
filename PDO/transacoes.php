<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "padrao", "1045");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = ?");

$id= '2';

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";


//O resultado da transação só é determinado após passar pela execução dos métodos ::rollback(0) ou ::commit(), antes disso o comando foi enviado ao banco porém não confirmado.

?>
