<?php

Class Aviao {

	/*
	CHANGELOG PARA O ER:
	
	*/

	//Atributos da classe
	private $registro;
	private $modeo;
	private $aeroporto;

	//Getters e setters
	public function setRegistro($registro){
		$this->registro = $registro;
	}
	public function getRegistro(){
		return $this->registro;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function setAeroporto($aeroporto){
		$this->aeroporto = $aeroporto;
	}
	public function getAeroporto(){
		return $this->aeroporto;
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