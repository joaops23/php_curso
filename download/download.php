<?php 

$link = "https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg";

$content = file_get_contents($link);
// Resgata e Lê o conteúdo do arquivo.

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?= $basename ?>">