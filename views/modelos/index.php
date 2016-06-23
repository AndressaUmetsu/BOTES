<!--Div para notificações-->
<div class="" id="notification"></div>

<!--Tabela com os valores cadastrados-->
<h3>Modelos Cadastrados:</h3>
<table class="table table-hover table-bordered table-sm">
	<thead>
		<th>#</th> 
		<th class="col-md-7 col-xs-7">Nome</th>
		<th class="col-md-2 col-xs-2 tcenter">Peso</th>
		<th class="col-md-2 col-xs-2 tcenter">Capacidade</th>
		<th class="col-md-1 col-xs-1 tcenter">Ações</th>
	</thead>
	<?php 
	if($modelos == NULL){ ?>
		<td colspan="5">Nenhum modelo foi encontrado :(</td>
	<?php }
	foreach($modelos as $modelo) { $row = "row". $modelo->getID(); ?>
	<tr id="<?php echo $row; ?>">
		<th scope="row"><?php echo $modelo->getID(); ?></th>
		<td><?php echo $modelo->getNome(); ?></td>
		<td class="tcenter"><?php echo $modelo->getPeso(); ?></td>
		<td class="tcenter"><?php echo $modelo->getCapacidade(); ?></td>
		<td class="tcenter">
			<a href="#" class="editarModelo" data-toggle="modal" data-target="#modalEditarModelo"><img src="images/edit.png" title="Editar" width="16" height="16"></a>
			<a href="#" onclick="delModelo(<?php echo $modelo->getID();?>)"><img src="images/delete.png" title="Excluir" width="16" height="16"></a>
		</td>
	</tr>
	<?php } ?>
</table>


<!--MODAL STUFF-->
<!--MODAL STUFF-->
<!--MODAL STUFF-->

<!-- Botao que da o trigger na modal de cadastro-->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalModelo">Novo Modelo</button>
<!-- Modal -->
<div class="modal fade" id="modalModelo" tabindex="-1" role="dialog" aria-labelledby="labelCadastro" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                	<span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="labelCadastro">Cadastro de Modelo</h4>
            </div>
            
            <form class="form-horizontal" role="form" method="POST" action="/" id="cadastroModelo">
	            <!-- Modal Body -->
	            <div class="modal-body">
	                  <div id="validation"></div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputNomeModelo">Nome:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputNomeModelo" name="inputNomeModelo" placeholder="Informe o nome do novo Modelo"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputPeso">Peso:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputPeso" name="inputPeso" placeholder="Informe o novo peso do modelo"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputCapacidade">Capacidade:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputCapacidade" name="inputCapacidade" placeholder="Informe a capacidade do modelo"/>
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

<!-- Modal Editar-->
<div class="modal fade" id="modalEditarModelo" tabindex="-1" role="dialog" aria-labelledby="labelEditarModelo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                	<span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="labelCadastroModelo">Alteração de Modelo</h4>
            </div>
            
            <form class="form-horizontal" role="form" method="POST" action="/" id="alterarModelo">
	            <!-- Modal Body -->
	            <div class="modal-body">
	                  <div id="validation"></div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputAlterNome">Nome:</label>
	                    <div class="col-sm-10">
	                    	<input type="hidden" id="inputAlterIdModelo" name="inputAlterIdModelo"/>
	                        <input type="text" class="form-control" id="inputAlterNomeModelo" name="inputAlterNomeModelo" placeholder="Informe o novo nome do Modelo"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputAlterPeso">Peso:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputAlterPeso" name="inputAlterPeso" placeholder="Informe o novo peso do modelo"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputAlterCapacidade">Capacidade:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputAlterCapacidade" name="inputAlterCapacidade" placeholder="Informe a nova capacidade do modelo"/>
	                    </div>
	                  </div>

	            </div>
	            
	            <!-- Modal Footer -->
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	                <button type="submit" class="btn btn-primary" data-loading-text="Salvando..." id="submitAlteracao" >Salvar</button>
	            </div>
            </form>
        </div>
    </div>
</div>
