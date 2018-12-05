<?php 


$id = (isset($_GET["id"]))?$_GET["id"]:3;

if(!is_numeric($id) || strlen($id) > 5) {
	exit("pegamos vc");
}

$conn = mysqli_connect("localhost", "root", "", "SERVER");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	echo $resultado->deslogin . "<br>";
}

?>