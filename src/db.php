<?php  

	namespace src;
	use \PDO;

	class db{

		protected $connect;
		private $user = 'root';
		private $pass = '';
		private $dbname = 'api';
		private $host = 'localhost';

		public function __construct(){
			$this->connection();
		}

		protected function connection(){
			try{

				$this->connect = new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);

			}catch(\PDOException $e){
				die($e);
			}
		}

	}


?>