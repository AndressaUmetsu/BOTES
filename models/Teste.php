<?php

Class Teste {

	/*
	CHANGELOG PARA O ER:
	-Movido o atributo 'pontuacao' para a tabela 'manutencao' DONE 
	*/ 

	//Atributos da classe
	private $nroAnac;
	private $nome;

	public function setNroAnac($nroAnac){
		$this->nroAnac = $nroAnac;
	}
	public function getNroAnac(){
		return $this->nroAnac;
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