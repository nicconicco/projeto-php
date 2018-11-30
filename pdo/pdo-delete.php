<?php 

	$conn = new PDO("mysql:dbname=SERVER;host=localhost", "root", "");
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	$id = "2";

	$stmt -> bindParam(":ID", $id);

	$result = $stmt->execute();

	if ($result) {
		echo "Deletado com sucesso";
	}
 ?>