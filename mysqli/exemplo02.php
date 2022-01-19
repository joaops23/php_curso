<?php

$conn = new mysqli("127.0.0.1","root","","dbphp7");

//tratamento de erro de conexão 
if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_object()){

	array_push($data, $row);
	//var_dump($row);
}


echo json_encode($data);

?>