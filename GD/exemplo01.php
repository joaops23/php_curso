<?php 

//header("Content-Type: image/png");
GdImage(){
	+size: "256x256"
	+truecolor: true
}

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0,0,0); // informe a imagem, ápós isso informe as instruções rgb

$red = imagecolorallocate($image, 255,0,0);

imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

imagepng($image);

imagedestroy($image);

?> 