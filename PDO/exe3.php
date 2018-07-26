<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login= "Pedro";
$passoword= "abc123";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$passoword);

$stmt->execute();

echo "Inserido com Sucesso !";






 ?>