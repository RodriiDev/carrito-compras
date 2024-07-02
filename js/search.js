function lookup(inputString) {
    if(inputString.length == 0) {

      $('#suggestions').hide(); //ocultar
    } else {
      $.post("busqueda.php", {queryString: ""+inputString+""}, function(data){
        if(data.length >0) {
          $('#suggestions').show();
          $('#autoSuggestionsList').html(data);
        }
      });
    }
  } //lookup
  
  function fill(thisValue) {
    $('#inputString').val(thisValue);
    setTimeout("$('#suggestions').hide();", 200);
  }