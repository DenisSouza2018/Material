<?php 

$file = fopen("text.txt", "w+");

fclose($file);

unlink("text.txt");// deleta o arquivo criado 

 ?>