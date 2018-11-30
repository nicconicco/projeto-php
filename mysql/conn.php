<?php 

// ultimo parametro eh o nome do banco de dados
$conn = new mysqli("localhost", "root", "", "SERVER");

//$con = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "id7918765_server2");

	if ($conn->connect_error) {
		echo "Error" . $conn->connect_error;
		exit;
	} 

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$data = array();

	if($result) {
		while ($row = $result->fetch_array()) {
			array_push($data, $row);
		}
	} else {
		echo "Erro";
	}

	echo json_encode($data);
 ?>