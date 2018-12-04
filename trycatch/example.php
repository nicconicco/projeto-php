<?php 

function trataNome($name) {

	if(!$name) {
		throw new Exception("Nenhum nome informado"."<br>", 1);
	}

	echo ucfirst($name)."<br>";
}


// try {


// } catch(Exception $e) {

// 	echo $e->getMessage();

// } finally {

// 	echo "Executou o try!"."<br>";

// }


function error_handler($code, $message, $file, $line) {
	 	echo json_encode(array(
		"message"=>$message,
		"line"=>$line,
		"file"=>$file,
		"code"=>$code
		));
}

set_error_handler("error_handler");

echo 100/0;

// try {

// 	throw new Exception("Error Processing Request", 400);

// } catch(Exception $e) {

// 	echo json_encode(array(
// 		"message"=>$e->getMessage(),
// 		"line"=>$e->getLine(),
// 		"file"=>$e->getFile(),
// 		"code"=>$e->getCode()
// 	));
// }

?>