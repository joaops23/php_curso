<?php

$cep = '04910070';
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

// Parâmetros: Ponto de conexão, opções de transferencia(no caso espera-se retorno), retorno Binário(sim ou não)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // CERTIFICADO SSL FALSO

// após a verificação e set das configurações do curl, ele executa

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r ($data);

?>