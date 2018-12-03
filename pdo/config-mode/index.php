<?php 

require_once("config.php");

	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);

	// $root = new Usuario();
	// $root->loadById("3");

	// echo $root;

	// $lista = Usuario::getList();

	// echo json_encode($lista);

	// $lista = Usuario::search("jose");

	// echo json_encode($lista);

	// $usuario = new Usuario();
	// $usuario->login("niconico","123");

	// echo $usuario;

	$aluno = new Usuario("aluno2", "aluno2");	

	$aluno->insert();

	echo $aluno;

 ?>