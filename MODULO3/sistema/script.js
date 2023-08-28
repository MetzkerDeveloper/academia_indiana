$(function(){
  $("#search").keyup(function(){
    var pesquisa = $(this).val();

    if(pesquisa != ''){
      var dados = {
        palavra: pesquisa
      }
      $.post('search.php',dados, function(response) {
        // mostrar dentro de
        $(".resultado").html(response);
      });
    }
  });
});