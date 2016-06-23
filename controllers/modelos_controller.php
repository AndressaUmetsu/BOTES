<?php
  class ModeloController {
    public function index() {
      // Guardamos os dados de todos os Modelos em uma variavel
      $modelos = Modelo::all();
      require_once('views/modelos/index.php');
    }

    public function register() {
      if (!isset($_POST['action']) | empty($_POST['action']) | !isset($_POST['inputNomeModelo']) | empty($_POST['inputNomeModelo']) |
          !isset($_POST['inputPeso']) | empty($_POST['inputPeso']) | !isset($_POST['inputCapacidade']) | empty($_POST['inputCapacidade']))
        return call('pages', 'error');

      $nome = $_POST['inputNomeModelo'];
      $peso = $_POST['inputPeso'];
      $capacidade = $_POST['inputCapacidade'];

      $modelo = Modelo::findByName(($_POST['inputNomeModelo']));
      if($modelo){
        echo "<strong>Oops!</strong> Parece que já existe um Modelo com este nome!";
      }else{
        if (Modelo::register($nome, $peso, $capacidade)){
            echo "<strong>Sucesso!</strong> O cadastro foi efetuado com sucesso!";
        }else{
            echo "<strong>Erro!</strong> Ocorreu um problema ao guardar os dados! Tente novamente mais tarde.";
        }
      }
    }

    public function delete() {
      if (!isset($_POST['id']) | empty($_POST['id']))
        return call('pages', 'error');

      $id = $_POST['id'];
      if (Modelo::delete($id)){
        echo "Modelo excluído com sucesso!";
      }else{
        echo "Falha ao excluir Modelo. Tente novamente mais tarde.";
      }
    }

    public function edit() {
      if (!isset($_POST['inputAlterIdModelo']) | empty($_POST['inputAlterIdModelo']) | 
          !isset($_POST['inputAlterNomeModelo']) | empty($_POST['inputAlterNomeModelo']) | 
          !isset($_POST['inputAlterPeso']) | empty($_POST['inputAlterPeso'])| 
          !isset($_POST['inputAlterCapacidade']) | empty($_POST['inputAlterCapacidade']))
        return call('pages', 'error');

      $id = $_POST['inputAlterIdModelo'];
      $nome = $_POST['inputAlterNomeModelo'];
      $peso = $_POST['inputAlterPeso'];
      $capacidade = $_POST['inputAlterCapacidade'];

      if(Modelo::edit($id, $nome, $peso, $capacidade)){
        echo "Modelo alterado com sucesso!";
      }else{
        echo "Falha ao alterar Modelo. Tente novamente mais tarde.";
      }
    }
  }
?>