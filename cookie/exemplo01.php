<?php 

$data = array(
	"empresa" => 'Hcode Treinamentos'
);

setcookie("nome_do_cookie", json_encode($data), time() + 3600 ); // o tempo é por segundos

echo "OK";



?>