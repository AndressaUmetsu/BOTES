<?php

require "Empregado.php";

Class Controlador extends Empregado {

	/*
	CHANGELOG PARA O ER:
	*/

	//Atributos da classe
	private $dataExame; 
	
	//Getters e setters
	public function setDataExame($dataExame){
		$this->dataExame = $dataExame;
	}
	public function getDataExame(){
		return $this->dataExame;
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