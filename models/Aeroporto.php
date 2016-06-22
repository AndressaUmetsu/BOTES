<?php

Class Aeroporto {

	/*
	CHANGELOG ER:
	- Adicionado campo 'nome'
	- Renomeado 'quantidadeModelo' para 'quantidadeAvioes'
	*/

	//Atributos da classe
	private $id;
	private $nome;
	private $qtdAvioes;

	public function __construct($id, $nome, $qtdAvioes){
		$this->id = $id;
		$this->nome = $nome;
		$this->qtdAvioes = $qtdAvioes;
	}

	public static function all() {
		$list = [];
      	$db = Database::getInstance();
      	$request = $db->query('SELECT * FROM aeroportos');

      	// we create a list of Post objects from the database results
      	foreach($request->fetchAll() as $aeroporto) {
     	   $list[] = new Aeroporto($aeroporto['idAeroporto'], $aeroporto['nome'], $aeroporto['quantidadeAvioes']);
     	 }

      	return $list;
    }

    public static function find($id) {
      $db = Database::getInstance();
      // Validamos se o $id é um inteiro
      $id = intval($id);
      $request = $db->prepare('SELECT * FROM aeroportos WHERE idAeroporto = :id');
      // A query foi preparada, agora substituimos o :id pelo $id real
      $request->execute(array('id' => $id));
      $aeroporto = $request->fetch();

      return new Aeroporto($aeroporto['idAeroporto'], $aeroporto['nome'], $aeroporto['quantidadeAvioes']);
    }

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
	public function setQtdAvioes($qtdAvioes){
		$this->qtdAvioes = $qtdAvioes;
	}
	public function getQtdAvioes(){
		return $this->qtdAvioes;
	}

	//Funções de Adicionar, editar e excluir
	public function salvar(){}
	public function editar(){}
	public function excluir(){}
}

?>