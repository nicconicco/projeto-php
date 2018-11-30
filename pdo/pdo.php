<?php 

	$conn = new PDO("mysql:dbname=SERVER;host=localhost", "root", "");

//$conn = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "id7918765_server2");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	//PDO::FETCH_ASSOC = trás sem os dados do usuário
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// var_dump($results);
	echo json_encode($results);

 ?>