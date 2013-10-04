<?php

$u=100;
$c="udg";
$usuario = $_POST["user"];
$contra = $_POST["pass"];

	if($u==$usuario && $c==$contra){
	 echo "Bienvenido";
	}
	
	else{
	 echo "acceso incorrecto";
	
	}

?>
<!DOCTYPE html>
<html>
<body></body>
</html>