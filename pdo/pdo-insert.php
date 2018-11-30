<?php 

	$conn = new PDO("mysql:dbname=SERVER;host=localhost", "root", "");
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

	$login = "niconico";
	$password = "niconico";

	$stmt -> bindParam(":LOGIN", $login);
	$stmt -> bindParam(":PASSWORD", $password);

	$result = $stmt->execute();

	if ($result) {
		echo "Inserido com sucesso";
	}
 ?>