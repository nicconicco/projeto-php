<?php 

	$conn = new PDO("mysql:dbname=SERVER;host=localhost", "root", "");
	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "niconicoUPDATE";
	$password = "niconicoUPDATE";
	$id = 2;

	$stmt -> bindParam(":LOGIN", $login);
	$stmt -> bindParam(":PASSWORD", $password);
	$stmt -> bindParam(":ID", $id);

	$result = $stmt->execute();

	if ($result) {
		echo "Alterado com sucesso";
	}
 ?>