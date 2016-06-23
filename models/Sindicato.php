<?php

Class Sindicato {

	/*
	CHANGELOG PARA O ER:
	- Atributo 'nroMembro' renomeado para 'id' DONE
	*/

	//Atributos da classe
	private $id;
	private $nome;

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

	//Funções de Adicionar, editar e excluir
	public function salvar(){

	}

	public function editar(){

	}

	public function excluir(){
		
	}
}

?>