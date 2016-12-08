var app = {
  urlServer:'http://localhost/formation-php-ajax'
};

$(document).ready(function() {
  loadPoems();

  $('#sendAjax').on('click', function() {

    var message = $('#message').val();

    $.ajax({
      url: app.urlServer + '/poem-add.php',
      method: 'POST',
      data: {message: message},
      success: function(res) {},
      error: function(res) {}
    });

  });

});

function loadPoems() {
  $.ajax({
    url: app.urlServer + '/poem-list.php',
    method: 'GET',
    success: function(res) {
      var poems = JSON.parse(res); // conversion de la chaîne en tableau JS
      poems.forEach(function(poem) {
        $('body').append('<p>id:'+poem.id+' titre: '+poem.title+'</p>');
      });
    },
    error: function() {
      console.log('ERREUR');
    }
  });
}
