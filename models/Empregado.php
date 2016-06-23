<?php

Class Empregado {

	/*
	CHANGELOG PARA O ER:
		- Atributo 'nroMembro' pode ser renomado para 'idSindicato'
	*/

	//Atributos da classe
	private $matricula; 
	private $nome; 
	private $telefone;
	private $salário; 
	private $endereco; 
	private $aeroporto; 
	private $sindicato; 
	
	//Getters e setters
	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	public function getMatricula(){
		return $this->matricula;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setSalario($salario){
		$this->salario = $salario;
	}
	public function getSalario(){
		return $this->salario;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function setAeroporto($aeroporto){
		$this->aeroporto = $aeroporto;
	}
	public function getAeroporto(){
		return $this->aeroporto;
	}
	public function setSindicato($sindicato){
		$this->sindicato = $sindicato;
	}
	public function getSindicato(){
		return $this->sindicato;
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