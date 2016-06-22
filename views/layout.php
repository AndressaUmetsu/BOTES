<DOCTYPE html>
<html>
  <head>
    <title>Trabalho de BOTES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Icon-->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <!--JS-->
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/magica.js" ></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li><a href='/'>Home</a></li>
          <li><a href='?controller=aeroportos&action=index'>Aeroportos</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <?php require_once('routes.php'); ?>
    </div>
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted">© 2016 - A&R. Todos os direitos reservados. </p>
      </div>
    </footer> 

  <body>
<html>