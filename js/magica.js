var defaultUrl = "http://localhost";

function createHtmlAlert(msg, type){
  var classe = "alert alert-dismissible fade in ";
  var strong = "Oops!";
  switch(type){
    case "warning":
      classe = classe + "alert-danger";
      break;

    case "success":
      strong = "Sucesso!";
      classe = classe + "alert-success";
      break;

    case "result":   
      classe = classe + "alert-success";
      break;

    default:
      break;
  }

  var text = '<div class="'+classe+'"" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button><strong>'+strong+'</strong> '+msg+'</div>';  
  return text;
}

$(function(){
    $('#modalAeroporto').on('submit', function(e){
        e.preventDefault();

        //validação do form
        if($("#inputNomeAeroporto").val() == ""){
            $("#validation").html(createHtmlAlert("Todos os campos precisam ser preenchidos. ", "warning"));
            $("#inputNomeAeroporto").focus();
            return;
        }
        //Coloca o  botão de 'Salvar' em estado de 'Salvando...' (o request pode demorar?)
        $("#submitCadastro").button('loading');
        //envia a request
        $.ajax({
           type: "GET",
           url: defaultUrl + "?controller=forms&action=new",
           data: $('#inputNomeAeroporto').serialize(),
           success: function(msg){
                //reseta o botao pra 'Salvar' e fecha a modal
                $("#submitCadastro").button('reset');
                $('#modalAeroporto').modal('toggle');
                $("#validation").html(createHtmlAlert("", "warning"));
           },
           error: function(){
                $("#validation").html(createHtmlAlert("Algo de errado ocorreu com a requisição de cadastro. Feche a janela e tente novamente mais tarde. ", "warning"));
           }
        });
    });
});

$(document).ajaxSend(function(event, request, settings) {
console.log(settings); 
});

$(document).ajaxComplete(function(event, request, settings) {
});