$(document).ready(function() {

  var id = $('.artwork-carousel-item:first-child').attr('exemplaire-id');

  $('.artwork-carousel-item:first-child').addClass('exemplaire-selected');
  $('.artwork-picture:first-child').addClass('show-artwork-picture');

  $('.artwork-carousel-item').bind('click', function(element) {
    id = $(this).attr('exemplaire-id');
    $('.artwork-carousel-item').removeClass('exemplaire-selected');
    $(this).addClass('exemplaire-selected');
    $('.artwork-picture').removeClass('show-artwork-picture');
    $('#art-picture-'+id).addClass('show-artwork-picture');
  });

  $('#artwork-btn').bind('click', function(element) {

    $.ajax({
      url: '/artwork/borrow/'+id,
      method: 'GET',
      dataType: 'json',
      success: function(res) {
        console.log(res);
      },
      error: function(req, status, err) {
        console.log(status, err, req);
      }
    });

  });
});
