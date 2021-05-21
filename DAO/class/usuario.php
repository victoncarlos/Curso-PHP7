<?php
class Usuario {// INICIO DE CLASSE

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($value){

		$this->idusuario = $value; 
	}
////////////////////////////////////////////////////
	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDeslogin($value){

		$this->deslogin = $value; 
	}
//////////////////////////////////////////////////////
	public function getDessenha(){

		return $this->dessenha;
	}

	public function setDessenha($value){

		$this->dessenha = $value; 
	}
//////////////////////////////////////////////////////////
	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function setDtcadastro($value){

		$this->dtcadastro = $value; 
	}

	

	public function loadById($id){

		$sql = new Sql();// classe que foi criada para fazer um SELECT

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));// variavel criada para guardar o select, sendo que o valor passado vai se um array, como foi atribuido na classe SQL
		if (count($results)>0){// ou (isset(results[0]))se tem alguma resultado no indice 0 do array //condição para verificar se existe resultado 
			$this->setData($results[0]);			
		}



	}

	public static function getList(){// método para listar os dados no banco

		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");//listar todos os usuários por ordem de login

	}

	public static function search($login){//função para listar por login por uma letra ou letras no login

		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%".$login."%"
		));
	}

	public static function login($login,$password){//função para autenticar login e senha

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		if (count($results)>0){ 

			$this->setData($results[0]);

		}else{

			throw new Exception("LOGIN E/OU SENHA INVÁLIDOS");
			
		}

	}

	public function setData($data){// função para pegar idusuario,login,senha e data

		$this->setIdusuario($data['idusuario']);//pegar os dados e jogar nos set
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	public function __construct($login = "", $password = ""){//construtor para chamar o login e a senha na classe

		$this->setDeslogin($login);
		$this->setDessenha($password);

	}

	public function update ($login,$password){//função para fazer atualização no banco

		$this->setDeslogin($login);
		$this->setDessenha($password);


		$sql = new sql();

		$sql->execquery("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
		':LOGIN'=>$this->getDeslogin(),	
		':PASSWORD'=>$this->getDessenha(),
		':ID'=>$this->getIdusuario()
		));

	}

	public function  insert(){//inserir dados AINDA COM ERRO 1064

		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));

		if (count (results)>0){
			$this->setData($results[0]);
			}
		}















	public function __toString(){// convertendo o resultado em uma string e retornando como um array

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()
		));

	}


}// FIM DE CLASSE


?>