<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdUsuario() {
		return $this->idusuario;
	}

	public function setIdUsuario($idusuario) {
		$this->idusuario = $idusuario;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($deslogin) {
		$this->deslogin = $deslogin;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($value) {
		$this->dessenha = $value;
	}

	public function getDtCadastro() {
		return $this->dtcadastro;
	}

	public function setDtCadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",
		    array(":ID"=>$id)
		);


		if (count($results) > 0) {

			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			// echo "id = " . $row['idusuario'];
			// echo "<br>";
			

			$this->setDeslogin($row['deslogin']);
			// echo "deslogin = " . $row['deslogin'];
			// echo "<br>";

			$this->setDessenha($row['dessenha']);
			// echo "dessenha = " . $row['dessenha'];
			// echo "<br>";

			$this->setDtCadastro(new DateTime($row['dtcadastro']));
			//echo "DateTime = " . new DateTime($row['dtcadastro']);
			//echo "<br>";
		} 
	}

	public function __toString() {
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}
}
?>