<?php

function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Olá $texto! $periodo!<br>";
}

echo ola("mundo", "Boa tarde");
echo ola("Gláucio", "Boa noite");
echo ola("João", "");
echo ola();
echo ola("");