<?php

spl_autoload_register(function($clas_name){
	$filename = "class" . DIRECTORY_SEPARATOR . $clas_name . ".php";

	if(file_exists(($filename))) {
		require_once($filename);
	}
})

?>