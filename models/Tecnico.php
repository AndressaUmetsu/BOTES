<?php

require "Empregado.php";

Class Tecnico extends Empregado {

	/*
	CHANGELOG PARA O ER:
	*/

	//Atributos da classe
	private $modelo;

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getModelo(){
		return $this->modelo;
	}

	//Funções de Adicionar, editar e excluir
	public function salvar(){

	}

	public function editar(){

	}

	public function excluir(){
		
	}
}

?>