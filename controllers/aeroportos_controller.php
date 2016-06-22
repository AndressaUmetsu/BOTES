<?php
  class AeroportoController {
    public function index() {
      // Guardamos os dados de todos os aeroportos em uma variavel
      $aeroportos = Aeroporto::all();
      require_once('views/aeroportos/index.php');
    }

    public function show() {
      // Esperamos uma url da forma ?controller=posts&action=show&id=x
      // sem esse id, é impossivel mostrar um aeroporto específico, portanto, redirecionamos para a página de erros
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // Usamos o id para encontrar informações sobre um determinado aeroporto
      $aeroporto = Aeroporto::find($_GET['id']);
      require_once('views/aeroportos/show.php');
    }

    public function register() {
      if (!isset($_POST['action']) | empty($_POST['action']) | !isset($_POST['inputNomeAeroporto']) | empty($_POST['inputNomeAeroporto']) |
          !isset($_POST['inputQtdAvioes']) | empty($_POST['inputQtdAvioes']))
        return call('pages', 'error');

      $nome = $_POST['inputNomeAeroporto'];
      $qtd = $_POST['inputQtdAvioes'];

      $aeroporto = Aeroporto::findByName(($_POST['inputNomeAeroporto']));
      if($aeroporto){
        echo "<strong>Oops!</strong> Parece que já existe um aeroporto com este nome!";
      }else{
        if (Aeroporto::register($nome, $qtd)){
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
      if (Aeroporto::delete($id)){
        echo "Aeroporto excluído com sucesso!";
      }else{
        echo "Falha ao excluir aeroporto. Tente novamente mais tarde.";
      }
    }
//inputAlterIdAeroporto=9&inputAlterNomeAeroporto=Senhor+Alguem+de+Loyola+Joinville&inputAlterQtdAvioes=151&action=edit
    public function edit() {
      if (!isset($_POST['inputAlterIdAeroporto']) | empty($_POST['inputAlterIdAeroporto']) | 
          !isset($_POST['inputAlterNomeAeroporto']) | empty($_POST['inputAlterNomeAeroporto']) | 
          !isset($_POST['inputAlterQtdAvioes']) | empty($_POST['inputAlterQtdAvioes']))
        return call('pages', 'error');

      $id = $_POST['inputAlterIdAeroporto'];
      $nome = $_POST['inputAlterNomeAeroporto'];
      $qtd = $_POST['inputAlterQtdAvioes'];

      if(Aeroporto::edit($id, $nome, $qtd)){
        echo "Aeroporto alterado com sucesso!";
      }else{
        echo "Falha ao alterar aeroporto. Tente novamente mais tarde.";
      }
    }
  }
?>