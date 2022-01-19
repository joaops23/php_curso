<?php

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {

	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers ) . "\r\n");

// nesse nível o foreach está acessando a linha retornada do statement->prepare
foreach ($usuarios as $row) {
	$data = array();

	// Neste nível o foreach está tratando de cada coluna da linha 
	foreach ($row as $key => $value ) {
		array_push($data, $value);
	}// End foreach de coluna
	fwrite($file, implode(",", $data) . "\r\n");
}// end foreach de linhas 

fclose($file);
?>