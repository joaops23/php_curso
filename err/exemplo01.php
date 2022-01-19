<?php 


function error_handler($exception) {
	
	echo json_encode(array(
		'code'=>$exception->getCode(),
		'message'=>$exception->getMessage(),
		'line'=>$exception->getLine(),
		'file'=>$exception->getFile()
	));
}
set_exception_handler("error_handler");

echo  100 / 0;

?>