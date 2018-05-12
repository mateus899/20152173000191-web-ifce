<?php
$fp = fopen ("arquivo1.txt", "a");

$frase1 = fwrite($fp, "frase 1\r\n");
$frase2 = fwrite($fp, "frase 2\r\n");
$frase3 = fwrite($fp, "frase 3\r\n");

fclose($fp);

?>