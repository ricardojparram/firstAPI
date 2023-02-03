<?php 
	
	if(file_exists('vendor/autoload.php')){
		require_once('vendor/autoload.php');
	}

	$request = $_SERVER['REQUEST_METHOD'];

	switch($request){
		case 'POST' :

		echo "El request es POST";

		break;
		case 'GET' :

		echo "El request es GET";

		break;
		case 'PUT' :

		echo "El request es PUT";

		break;
		case 'DELETE' :

		echo "El request es DELETE";

		break;
		default : die('Error del request');
	}

?>