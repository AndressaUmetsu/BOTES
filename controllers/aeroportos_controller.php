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
  }
?>