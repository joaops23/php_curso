<?php

$name = "images";


// is_dir = se existir o dir
if(!is_dir($name)) {

	// Criar dir 
	mkdir($name);

	echo " o diretório: $name, foi criado com sucesso ";

}else {

	//rmdir($name);
	echo " o diretório: $name, já existe ";
}



?>