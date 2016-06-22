<!--Div para notificações-->
<div class="" id="notification"></div>

<!--Tabela com os valores cadastrados-->
<h3>Aeroportos Cadastrados:</h3>
<table class="table table-hover table-bordered table-sm">
	<thead>
		<th>#</th> 
		<th class="col-md-8 col-xs-8">Nome</th>
		<th class="col-md-3 col-xs-3 tcenter">Quantidade de Aviões</th>
		<th class="col-md-1 col-xs-1 tcenter">Ações</th>
	</thead>
	<?php 
	if($aeroportos == NULL){ ?>
		<td colspan="4">Nenhum aeroporto foi encontrado :(</td>
	<?php }
	foreach($aeroportos as $aeroporto) { $row = "row". $aeroporto->getID(); ?>
	<tr id="<?php echo $row; ?>">
		<th scope="row"><?php echo $aeroporto->getID(); ?></th>
		<td><?php echo $aeroporto->getNome(); ?></td>
		<td class="tcenter"><?php echo $aeroporto->getQtdAvioes(); ?></td>
		<td class="tcenter">
			<a href="#" class="editar" data-toggle="modal" data-target="#modalEditar"><img src="images/edit.png" title="Editar" width="16" height="16"></a>
			<a href="#" onclick="delAeroporto(<?php echo $aeroporto->getID();?>)"><img src="images/delete.png" title="Excluir" width="16" height="16"></a>
		</td>
	</tr>
	<?php } ?>
</table>


<!--MODAL STUFF-->
<!--MODAL STUFF-->
<!--MODAL STUFF-->

<!-- Botao que da o trigger na modal de cadastro-->
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
	                    <label  class="col-sm-2 control-label" for="inputNomeAeroporto">Nome:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputNomeAeroporto" name="inputNomeAeroporto" placeholder="Informe o nome do novo aeroporto"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputQtdAvioes">Quantidade de Aviões:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputQtdAvioes" name="inputQtdAvioes" placeholder="Informe a quantidade de aviões suportada"/>
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
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="labelEditar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                	<span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="labelCadastro">Alteração de Aeroporto</h4>
            </div>
            
            <form class="form-horizontal" role="form" method="POST" action="/" id="alterarAeroporto">
	            <!-- Modal Body -->
	            <div class="modal-body">
	                  <div id="validation"></div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputAlterNome">Nome:</label>
	                    <div class="col-sm-10">
	                    	<input type="hidden" id="inputAlterIdAeroporto" name="inputAlterIdAeroporto"/>
	                        <input type="text" class="form-control" id="inputAlterNomeAeroporto" name="inputAlterNomeAeroporto" placeholder="Informe o novo nome do aeroporto"/>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <label  class="col-sm-2 control-label" for="inputAlterQtdAvioes">Quantidade de Aviões:</label>
	                    <div class="col-sm-10">
	                        <input type="text" class="form-control" id="inputAlterQtdAvioes" name="inputAlterQtdAvioes" placeholder="Informe a nova quantidade de aviões suportada"/>
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
