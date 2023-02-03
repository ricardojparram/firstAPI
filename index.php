<?php 
	
	if(file_exists('vendor/autoload.php')){
		require_once('vendor/autoload.php');
	}else{
		die("autoload.php doesn't exist");
	}

	use src\usuario as usuario;

	$request = $_SERVER['REQUEST_METHOD'];

	switch($request){
		case 'POST' :

			if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['gender'])){
				$user = new usuario();
				$user->createUser($_POST['name'] , $_POST['lastname'] , $_POST['email'] , $_POST['gender']);
			}else{
				echo json_encode(['error' => 'invalid parameters']);
			}

		break;

		case 'GET' :

			$user = new usuario();

			if(isset($_GET['id'])){
				$user->getUser($_GET['id']);
			}else{
				$user->getUsers();
			}


		break;

		case 'PUT' :

			parse_str(file_get_contents("php://input"), $_PUT);
			if(isset($_PUT['name']) && isset($_PUT['lastname']) && isset($_PUT['email']) && isset($_PUT['gender']) && isset($_PUT['id'])){
				$user = new usuario();
				$user->putUser($_PUT['name'], $_PUT['lastname'], $_PUT['email'], $_PUT['gender'], $_PUT['id']);
			}else{
				echo json_encode(['error' => 'invalid parameters']);
			}
			
		break;

		case 'DELETE' :

			parse_str(file_get_contents("php://input"), $_DELETE);
			// print_r($_DELETE);
			if(isset($_DELETE['id'])){
				$user = new usuario();
				$user->deleteUser($_DELETE['id']);
			}

		break;
		default : die('Error del request');
	}

?>