<?php 

session_start();

//Depos de verificar login e senha reinicie o ID da sessao
session_destroy();

session_start();

session_regenerate_id();

echo session_id();




 ?>