<?php 
	
class Sql extends PDO {
	
	private $conn;

	public function __construct() {
		$this->conn = new PDO("mysql:dbname=SERVER;host=localhost", "root", "");
		//$conn = mysqli_connect("localhost", "id7918765_nicoadmin", "nicoadmin", "id7918765_server2");
	}

	private function setParams($statments, $parameters = array()) {
		foreach ($parameters as $key => $value) {
			$this->setParams($statments, $key, $value);
		}
	}

	private function setParam($statments, $key, $value) {
			$statments->bindParam($key, $value);
	}

	public function query($rawQuery, $param = array()) {
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $param);
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $param = array()) {
		$stmt = $this->query($rawQuery, $param);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
 ?>
