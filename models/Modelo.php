<?php

Class Modelo {

	/*
	CHANGELOG PARA O ER:
	- Renomeado atributo "modelo" para "nome"
	- Removido atributo idAeroporto (Não faz sentido ter 'idAeroporto' na table 'modelos', só na 'avioes')
	
	*/

	//Atributos da classe
	private $id;
	private $nome;
	private $peso;
	private $capacidade;

	//Getters e setters
	public function setID($id){
		$this->id = $id;
	}
	public function getID(){
		return $this->id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setPeso($peso){
		$this->peso = $peso;
	}
	public function getPeso(){
		return $this->qtdPeso;
	}
	public function setCapacidade($capacidade){
		$this->capacidade = $capacidade;
	}
	public function getCapacidade(){
		return $this->capacidade;
	}
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