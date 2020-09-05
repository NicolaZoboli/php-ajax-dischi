function getData() {

  $.ajax({

    url: 'data.php',
    method: 'GET',
    success: function(data) {

      var success = data['success'];
      var arrayMusic = data['response'];

      if (success) {
        var template = $('#record-template').html();
        var compiled = Handlebars.compile(template);
        var target = $('.container');

        for (var i = 0; i < arrayMusic.length; i++) {
          var cd = arrayMusic[i];
          var cdHTML = compiled(cd);
          target.append(cdHTML);
        }
      }
    },
    error: function(err) {

      console.log(err);
    }
  });
}

function init() {

  getData();
}

$(document).ready(init);
