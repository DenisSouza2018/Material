<?php 


$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $tileColor);
imagestring($image, 5, 440, 350, "Denis Souza da Rosa", $tileColor);
imagestring($image, 3, 440, 370,utf8_decode("Concluíndo em: ").date("d-m-Y"), $tileColor);

header("Content-type: image/jpg");

imagejpeg($image,"certificado-".date("Y-m-d").".jpg",10);





?>