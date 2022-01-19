<?php

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1week");

echo Date("l: d/m/Y", $ts);

?>