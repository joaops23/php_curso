<form method="POST" enctype="multipart/form-data"> <!-- o enctype faz o/os arquivos que forem enviados pelo form serem tratados como arquivos binários, possibilitando a leitura do PHP--> 

	<input type='file' name='fileUpload' />

	<button type='submit'>Send</button>

</form>

<?php 

if( $_SERVER["REQUEST_METHOD"] === "POST") {

	$file = $_FILES["fileUpload"];

	if($file["error"]){

		throw new Exception("Error: ".$file["error"]);
	}


	$dirUploads = "uploads";

	if(!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

			// Move da pasta temporária da aplicação para o servidor.
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload realizado com sucesso!";

	} else {

		throw new Exception("Não foi possível realizar o Upload");
	}

	//$files  // é um array superglobal que trata os arquivos enviados pelo formulário
}

?>


<!-- 
	Método de funcionamento do $files

	- Cria uma pasta temporária no servidor, onde vai receber o arquivo ou os arquivos.

	- Recebe esse arquivo que, se caso for grande vai vim em varios pacotes, 

	- após receber todos os dados pode mover para uma pasta física.



-->