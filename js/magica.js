var defaultUrl = "http://localhost";
var lock = 0;


function createHtmlAlert(msg, type){
  var classe = "alert alert-dismissible fade in ";
  var strong = "";
  switch(type){
    case "warning":
    strong = "Oops!";
    classe = classe + "alert-danger";
    break;

    case "success":
    strong = "Sucesso!";
    classe = classe + "alert-success";
    break;

    case "info":   
    classe = classe + "alert-info";
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

    if(lock == 1)
      return false;
    lock = 1;

        // Abort any pending request
        if (request) {
          request.abort();
        }

        //validação do form
        if($("#inputNomeAeroporto").val() == ""){
          $("#validation").html(createHtmlAlert("O campo 'nome' é de preenchimento obrigatório. ", "warning"));
          $("#inputNomeAeroporto").focus();
          return false;
        }

        if($("#inputQtdAvioes").val() == ""){
          $("#validation").html(createHtmlAlert("O campo 'Quantidade de Aviões é de preenchimento obrigatório. ", "warning"));
          $("#inputNomeAeroporto").focus();
          return false;
        }

        //Coloca o  botão de 'Salvar' em estado de 'Salvando...' (o request pode demorar?)
        $("#submitCadastro").button('loading');
        //envia a request

        var $form = $('#cadastroAeroporto');
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize() +'&'+$.param({ 'action': "new" });
       // console.log(serializedData);

       var request =  $.ajax({
        type: "POST",
        url: defaultUrl + "?controller=aeroportos&action=register",
        data: serializedData,

        success: function(response){
          $("#submitCadastro").button('reset');
          $('#modalAeroporto').modal('toggle');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          $("#notification").html(createHtmlAlert(response, "info"));            

        },

        error: function(){
          $('#modalAeroporto').modal('toggle');
          $("#notification").html(createHtmlAlert("Algo de errado ocorreu com a requisição de cadastro. Feche a janela e tente novamente mais tarde. ", "warning"));   
        }
      });
       lock = 0;
     });
return false;
});

$(function(){
  $('.editar').on('click', function(e){
    e.preventDefault();

    var qtd = $(this).closest('td').prev('td');
    var nome = qtd.prev('td');
    var id = nome.prev('th');

    $("#inputAlterIdAeroporto").val(id.text());
    $("#inputAlterNomeAeroporto").val(nome.text());
    $("#inputAlterQtdAvioes").val(qtd.text());

    $('#modalEditar').modal('toggle');
    return false;
  });
});


$(function(){
  $('#modalEditar').on('submit', function(e){
    e.preventDefault();

    if(lock == 1)
      return false;
    lock = 1;

        // Abort any pending request
        if (request) {
          request.abort();
        }

        //validação do form
        if($("#inputAlterNomeAeroporto").val() == ""){
          $("#validation").html(createHtmlAlert("O campo 'nome' é de preenchimento obrigatório. ", "warning"));
          $("#inputAlterNomeAeroporto").focus();
          return false;
        }

        if($("#inputAlterQtdAvioes").val() == ""){
          $("#validation").html(createHtmlAlert("O campo 'Quantidade de Aviões é de preenchimento obrigatório. ", "warning"));
          $("#inputAlterNomeAeroporto").focus();
          return false;
        }

        //Coloca o  botão de 'Salvar' em estado de 'Salvando...' (o request pode demorar?)
        $("#submitAlteracao").button('loading');
        //envia a request

        var $form = $('#alterarAeroporto');
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize()+'&'+$.param({ 'action': "edit" });
        console.log(serializedData);
        var request =  $.ajax({
          type: "POST",
          url: defaultUrl + "?controller=aeroportos&action=edit",
          data: serializedData,

        success: function(response){
          $("#submitAlteracao").button('reset');
          $('#modalEditar').modal('toggle');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          $("#notification").html(createHtmlAlert(response, "info"));            
        },

        error: function(){
          $('#modalEditar').modal('toggle');
          $("#notification").html(createHtmlAlert("Algo de errado ocorreu com a requisição de alteração. Feche a janela e tente novamente mais tarde. ", "warning"));   
        }
      });    
      lock = 0;
    });
  return false;
});


function delAeroporto(id){
  var result = confirm("Deseja apagar?");
  var serializedData = "id="+id+"";
  console.log(serializedData);
  if (result) {
    var request =  $.ajax({
      type: "POST",
      url: defaultUrl + "?controller=aeroportos&action=delete",
      data: serializedData,

      success: function(response){
        $("#notification").html(createHtmlAlert(response, "info"));            
      },

      error: function(){
        $("#notification").html(createHtmlAlert("Algo de errado ocorreu com a requisição. Tente novamente mais tarde. ", "warning"));   
      }
    });
    var row = "#row"+id;
    $(row).hide();
  }
}

$(document).ajaxSend(function(event, request, settings) {
});

$(document).ajaxComplete(function(event, request, settings) {
});