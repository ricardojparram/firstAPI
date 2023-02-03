<?php 

	namespace src;
	use src\db as db;

	class usuario extends db{

		private $id;
		private $name;
		private $lastname;
		private $email;
		private $gender;

		public function __construct(){
			parent::__construct();
		}

		public function createUser($name, $lastname, $email, $gender){

			$this->name = $name;
			$this->lastname = $lastname;
			$this->email = $email;
			$this->gender = $gender;

			try {
				
				$query = $this->connect->prepare("INSERT INTO usuarios(name, lastname, email, gender) VALUES(?,?,?,?)");
				$query->bindValue(1, $this->name);
				$query->bindValue(2, $this->lastname);
				$query->bindValue(3, $this->email);
				$query->bindValue(4, $this->gender);
				$query->execute();
				echo json_encode(['response' => 'insert ejecuted']);

			} catch (\PDOException $e) {
				die($e);
			}

		}

		public function getUsers(){
			try {
				
				$query = $this->connect->prepare("SELECT * FROM usuarios");
				$query->execute();
				$data = $query->fetchAll(\PDO::FETCH_OBJ);
				echo json_encode($data);

			} catch (\PDOException $e) {
				die($e);
			}
		}

		public function getUser($id){
			$this->id = $id;
			try {
				
				$query = $this->connect->prepare("SELECT * FROM usuarios WHERE id = ?");
				$query->bindValue(1, $this->id);
				$query->execute();
				$data = $query->fetchAll(\PDO::FETCH_OBJ);
				echo json_encode($data);

			} catch (\PDOException $e) {
				die($e);
			}
		}

		public function putUser($name, $lastname, $email, $gender, $id){

			$this->name = $name;
			$this->lastname = $lastname;
			$this->email = $email;
			$this->gender = $gender;
			$this->id = $id;

			try {
				
				$query = $this->connect->prepare("UPDATE usuarios SET name = ?, lastname = ?, email = ?, gender = ? WHERE id = ?");
				$query->bindValue(1, $this->name);
				$query->bindValue(2, $this->lastname);
				$query->bindValue(3, $this->email);
				$query->bindValue(4, $this->gender);
				$query->bindValue(5, $this->id);
				$query->execute();
				echo json_encode(['response' => 'update ejecuted']);

			} catch (\PDOException $e) {
				die($e);
			}
		}

		public function deleteUser($id){
			$this->id = $id;
			try {
				
				$query = $this->connect->prepare("DELETE FROM usuarios WHERE id = ?");
				$query->bindValue(1, $this->id);
				$query->execute();
				echo json_encode(['response' => 'delete ejecuted']);

			} catch (\PDOException $e) {
				die($e);
			}
		}

	}

?>