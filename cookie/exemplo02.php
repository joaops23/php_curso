<?php

if(isset($_COOKIE["nome_do_cookie"])) {
	$obj = json_decode($_COOKIE["nome_do_cookie"]);

	echo $obj->empresa;

}

?>