<?php

session_id('e33l2ms679ejlt8m546r09ofte');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br>";
var_dump($_SESSION);


?>