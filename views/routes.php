<?php
  function call($controller, $action) {
    // Requere o arquivo do controller especificado
    require_once('controllers/' . $controller . '_controller.php');

    // Cria uma nova instancia do controller
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;

      case 'aeroportos':
        // we need the model to query the database later in the controller
        require_once('models/Aeroporto.php');
        $controller = new AeroportoController();
      break;

      case 'avioes':
        // we need the model to query the database later in the controller
        //require_once('models/Aviao.php');
        //$controller = new AviaoController();
      break;

      case 'modelos':
        // we need the model to query the database later in the controller
        require_once('models/Modelo.php');
        $controller = new ModeloController();
      break;
    }

    // call the action
    $controller->{ $action }();
  }

  // Apenas uma lista de controllers e suas ações
  // Consideramos esses valores como sendo os 'permitidos'
  $controllers = array(
    'pages' => ['home', 'error'],
    'aeroportos' => ['index', 'register', 'delete', 'edit'],
    'modelos' => ['index', 'register', 'delete', 'edit'],
    'avioes' => ['index', 'register', 'delete', 'edit']
  );

  // Verifica se o controller e a action são válidas
  // Se não forem, redireciona pra uma pagina de erros
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>