<?php


// parametros, 1. caminho do arquivo e nome, 2. a operação que vai fazer no arquivo

// No parametro w+, o mais quer dizer, se não existir o arquivo, ele cria e segue as instruções seguintes

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso! ";


?>