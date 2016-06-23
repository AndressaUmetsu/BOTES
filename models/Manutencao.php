<?php

Class Manutencao {

	/*
	CHANGELOG PARA O ER:
	- Atributo 'dataTeste' renomeado pra 'data' DONE
	*/

	//Atributos da classe
	private $id; 
	private $nroAnac;
	private $idModelo; 
	private $matricula; 
	private $data;
	private $horasGastas; 
	private $pontuacao; 

	public function setNroAnac($nroAnac){
		$this->nroAnac = $nroAnac;
	}
	public function getNroAnac(){
		return $this->nroAnac;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	public function getMatricula(){
		return $this->matricula;
	}
	public function setData($data){
		$this->data = $data;
	}
	public function getData(){
		return $this->data;
	}
	public function setHorasGastas($horasGastas){
		$this->horasGastas = $horasGastas;
	}
	public function getHorasGastas(){
		return $this->horasGastas;
	}
	public function setPontuacao($pontuacao){
		$this->pontuacao = $pontuacao;
	}
	public function getPontuacao(){
		return $this->pontuacao;
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