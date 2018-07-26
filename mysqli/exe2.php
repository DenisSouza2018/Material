<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
	echo "Erro: ".$conn->connect_error;
}

$result=$conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row=$result->fetch_array()){ // fetch_assoc -> Traz só os nomes das string
	array_push($data, $row);
	//var_dump($row);

}

echo json_encode($data);

 ?>