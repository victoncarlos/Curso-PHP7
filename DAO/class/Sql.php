<?php

class Sql extends PDO { //criação de uma classe para fazer a conexão direta ao banco

	private $conn;

	public function __construct (){//funcoa para conectar ao banco

    $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	}

	private function setParams($statment, $parameters = array()){

	foreach ($parameters as $key => $value) {
				
			$this->setParam($statment,$key,$value);
			}
	}

	private function setParam($statment,$key,$value){

			$statment->bindParam($key,$value);
	}

	public function execQuery($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);
		
		$this->setParams($stmt,$params);		
		
		$stmt->execute();
		
		return $stmt;

	}


	public function select($rawQuery,$params=array()):array
	{


		$stmt = $this->execQuery($rawQuery,$params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}





?>