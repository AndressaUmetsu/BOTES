<?php
  require_once('connection.php');
?>
<html>
<meta charset="UTF-8"> 
<head>
	<title>Trabalho de BOTES</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/magica.js" ></script>
</head> 
<body>
	
	<div class="tabbable">
		<ul class="tabs">
			<li><a href="#tab1">Aeroportos</a></li>
			<li><a href="#tab2">Empregados</a></li>
			<li><a href="#tab3">Sindicatos</a></li>
			<li><a href="#tab4">Modelos</a></li>
		</ul>
		<div class="tabcontent">
			<div id="tab1" class="tab">
				<table border="1">
					<thead><h2>Aeroportos Cadastrados</h2></thead>
					<tr>
						<td>ID</td> 
						<td>Aeroporto</td>
						<td>Modelo Comportado</td>
					</tr>
				</table>
			</div>
			<div id="tab2" class="tab table-responsive">
				<table class="table table-hover table-bordered table-sm">
					<thead class="thead-inverse">
						<tr>
							<th>Matrícula</th> 
							<th>Nome</th> 
							<th>Telefone</th>  
							<th>Endereço</th> 
							<th>Salário</th> 
							<th>Tipo</th> 
							<th>Sindicato</th> 
							<th>Aeroporto</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<!--TODO: PHP que gera as linhas-->
					<tr>	
						<td>211021210</td>
						<td>José sem pé</td>
						<td>3464-1367</td>
						<td>UDESC :C</td>
						<td>mais de 8000</td>
						<td>Técnico</td>
						<td>Sindicato dos Escravos</td> 
						<td>daqui</td>
						<td>
							<a href="#"><img src="images/edit.png" title="Editar" width="16" height="16"></a>
							<a href="#"><img src="images/delete.png" title="Excluir" width="16" height="16"></a>
						</td>
					</tr>
					<tr>	
						<td>211021210</td>
						<td>João sem mão</td>
						<td>3464-1366</td>
						<td>UDESC tamén</td>
						<td>Kuri1rin</td>
						<td>Controlador</td>
						<td>Sindicato dos Escravos</td> 
						<td>De lá</td>
						<td>
							<a href="#"><img src="images/edit.png" title="Editar" width="16" height="16"></a>
							<a href="#"><img src="images/delete.png" title="Excluir" width="16" height="16"></a>
						</td>
					</tr>
					<tr>
						<td colspan="9" align="left">
							<a href=""><img src="images/plus.svg" title="Novo" width="48" height="48"/></a>
						</td>
					</tr>
				</table>
			</div>
			<div id="tab3" class="tab">
				<table border="1">
					<thead><h2>Modelos Cadastrados</h2></thead>
					<tr class="bold">
						<td>ID</td> 
						<td>NroMembro<td> 
						<td></td>
					</tr>
				</table>
			</div>
			<div id="tab4" class="tab">
				<table border="1">
					<thead><h2>Modelos Cadastrados</h2></thead>
					<tr class="bold">
						<td>ID</td> 
						<td>Modelo<td> 
						<td>Capacidade</td>
						<td>Peso</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>
<?php ?>
