$(document).ready(function() {

  $('select').material_select();

  var getExemplaires = function(callback) {
    $.ajax({
      url: window.location.href + '/exemplaires',
      method: 'GET',
      success: function(data) {
        callback(true, data);
      },
      error: function(err) {
        callback(false, err);
      }
    });
  }

  getExemplaires(function(success, data) {
    if (success) {
    }
  });
});
