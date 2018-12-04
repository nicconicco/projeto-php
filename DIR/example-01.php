<?php 

// $processUser = posix_getpwuid(posix_geteuid());
//   echo($processUser['name']);

$name = "images";

// if(!is_dir($name)) {
// 	mkdir($name);
// 	echo "Diretorio criado com sucesso.";
// } else {
// 	rmdir($name);
// 	echo "Ja existe o diretorio: $name foi removido!";
// }

$data = array();

$images = scandir($name);

foreach ($images as $img) {
	if(!in_array($img, array(".",".."))) {
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/projeto-php/dir/".str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}

echo json_encode($data);

 ?>
