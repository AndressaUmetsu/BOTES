<?php

Class Aeroporto {

	//Atributos da classe
	private $id;
	private $qtdModelo;

	public function __construct($id, $qtdModelo){
		$this->id = $id;
		$this->qtdModelo = $qtdModelo;
	}

	public static function all() {
		$list = [];
      	$db = Database::getInstance();
      	$request = $db->query('SELECT * FROM aeroportos');

      	// we create a list of Post objects from the database results
      	foreach($request->fetchAll() as $aeroporto) {
     	   $list[] = new Aeroporto($aeroporto['idAeroporto'], $aeroporto['quantidadeModelo']);
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

      return new Aeroporto($aeroporto['idAeroporto'], $aeroporto['quantidadeModelo']);
    }

	//Getters e setters
	public function setID($id){
		$this->id = $id;
	}
	public function getID(){
		return $this->id;
	}
	public function setQtdModelo($qtdModelo){
		$this->qtdModelo = $qtdModelo;
	}
	public function getQtdModelo(){
		return $this->qtdModelo;
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