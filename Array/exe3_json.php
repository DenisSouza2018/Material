<?php

$json='[{"nome":"Joao","Idade":"35"},{"nome":"Denis","Idade":"58"}]';

$data =json_decode($json,true);


var_dump($data);
?>