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

	public function __construct($id, $nome, $peso, $capacidade){
		$this->id = $id;
		$this->nome = $nome;
		$this->peso = $peso;
		$this->capacidade = $capacidade;
	}

	public static function all() {
		$list = [];
      	$db = Database::getInstance();
      	$request = $db->query('SELECT * FROM modelos');

	    // we create a list of Post objects from the database results
    	foreach($request->fetchAll() as $modelo) {
     		$list[] = new Modelo($modelo['idModelo'], $modelo['nome'], $modelo['peso'], $modelo['capacidade']);
     	}
      	return $list;
    }

	public static function register($nome, $peso, $capacidade) {
		if(empty($nome) || empty($peso) || empty($capacidade))
			return false;

      	$db = Database::getInstance();
      	$request = $db->prepare('INSERT into modelos (nome, peso, capacidade) values (:n, :p, :c)');
      	
      	if ($request->execute(array('n' => $nome, 'p' => $peso, 'c' => $capacidade)))
      		return true;

      	return false;
    }

    public static function delete($id) {
    	if(empty($id))
    		return false;

    	$db = Database::getInstance();
    	$request = $db->prepare('DELETE from modelos WHERE idModelo = :id');

    	if($request->execute(array('id' => $id))){
    		return true;
    	}

    	return false;
    }

    public static function edit($id, $nome, $peso, $capacidade) {
      if(empty($id) | empty($nome) | empty($peso) | empty($capacidade))
        return false;

      $db = Database::getInstance();
      $request = $db->prepare('UPDATE modelos SET nome = :n, peso = :p, capacidade = :c WHERE idModelo = :id');

      if($request->execute(array('id' => $id, 'n' => $nome, 'p' => $peso, 'c' => $capacidade))) {
        return true;
      }

      return false;
    }
    public static function find($id) {
      $db = Database::getInstance();
      // Validamos se o $id é um inteiro
      $id = intval($id);
      $request = $db->prepare('SELECT * FROM modelos WHERE idModelo = :id');
      // A query foi preparada, agora substituimos o :id pelo $id real
      $request->execute(array('id' => $id));
      $modelo = $request->fetch();

      return new Modelo($modelo['idModelo'], $modelo['nome'], $modelo['peso'], $modelo['capacidade']);
    }

    public static function findByName($nome) {
      $db = Database::getInstance();
      $request = $db->prepare('SELECT * FROM modelos WHERE nome = :n');
      // A query foi preparada, agora substituimos o :id pelo $id real
      $request->execute(array('n' => $nome));
      $modelo = $request->fetch();
      
      if($modelo['idModelo'] == NULL)
      	return NULL;

      return new Modelo($modelo['idModelo'], $modelo['nome'], $modelo['peso'], $modelo['capacidade']);
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
	public function setPeso($peso){
		$this->peso = $peso;
	}
	public function getPeso(){
		return $this->peso;
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
}

?>