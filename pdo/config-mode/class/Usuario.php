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

	public function setIDeslogin($deslogin) {
		$this->deslogin = $deslogin;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($dessenha) {
		$this->dessenha = $dessenha;
	}

	public function getDtCadastro() {
		return $this->dtcadastro;
	}

	public function setIDtCadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id) {

		$sql = new Sql();

		// a partir do PHP 5.4
		$array = [
		    ":ID" => $id,
		];

		$array = array(
    	    ":ID" => $id,
		);

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", $array);

		if (count($results) > 0) {

			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setIDtCadastro(new DateTime($row['dtcadastro']));
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