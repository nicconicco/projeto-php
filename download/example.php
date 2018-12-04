<?php 


$dir2 = "folder_02";


if(!is_dir($dir2)) mkdir($dir2);

$link = "http://1.bp.blogspot.com/-V7V5bjynofM/U72wkF5sKaI/AAAAAAAAA0E/Xx_ENK7v3wU/s1600/41.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);


rename( $basename, 
	    $dir2 . DIRECTORY_SEPARATOR . $basename
	  );

?>

<img src="<?=$dir2 . DIRECTORY_SEPARATOR .$basename?>">