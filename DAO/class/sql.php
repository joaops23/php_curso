<?php 

//Recupera tudo que o PDO faz e adiciona os métodos que quiser adicionar 
class Sql extends PDO {

	private $conn;

	public function __construct($db = "dbphp7") {

		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=" . $db, "padrao", "1045");
	}

	private function setParams($statment, $parameters = array()) {

		foreach ($parameters as $key => $value) {

			$this->setParam($statment, $key, $value);
		}
	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	}

	public function busca($rawQuery, $params = array()) {
	
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()) {

		$stmt = $this->busca($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>