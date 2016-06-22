<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('error.php');
}
?>

<div id="notification"></div>

<h3>Aeroportos Cadastrados:</h3>
<table class="table table-hover table-bordered table-sm">
	<thead>
		<th>#</th> 
		<th class="col-md-12 col-xs-12">Nome</th>
		<th>Ações</th>
	</thead>
	<?php foreach($aeroportos as $aeroporto) { ?>
	<tr>
		<th scope="row"><?php echo $aeroporto->getID(); ?></th>
		<td><?php echo $aeroporto->getNome(); ?></td>
		<td>
			<a href="#"><img src="images/edit.png" title="Editar" width="16" height="16"></a>
			<a href="#"><img src="images/delete.png" title="Excluir" width="16" height="16"></a>
		</td>
	</tr>
	<?php } ?>
</table>
<!-- Botao que da o trigger na modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalAeroporto">Novo Aeroporto</button>
<!-- Modal -->
<div class="modal fade" id="modalAeroporto" tabindex="-1" role="dialog" aria-labelledby="labelCadastro" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                	<span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="labelCadastro">Cadastro de Aeroporto</h4>
            </div>
            
            <form class="form-horizontal" role="form" method="POST" action="/" id="cadastroAeroporto">
	            <!-- Modal Body -->
	            <div class="modal-body">
	                  <div id="validation"></div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputNomeAeroporto">Nome</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputNomeAeroporto" placeholder="Informe o nome do novo aeroporto"/>
	                    </div>
	                  </div>

	            </div>
	            
	            <!-- Modal Footer -->
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	                <button type="submit" class="btn btn-primary" data-loading-text="Salvando..." id="submitCadastro" >Salvar</button>
	            </div>
            </form>
        </div>
    </div>
</div>
