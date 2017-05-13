$('.artwork-card').bind('mouseenter', function(element) {
  $(this).children('.card-action').addClass('show-action');
  $(this).children('.cover-carousel').children('.exemplaire-picture').addClass('show-picture');
});

$('.artwork-card').bind('mouseleave', function(element) {
  $(this).children('.card-action').removeClass('show-action');
  $(this).children('.cover-carousel').children('.exemplaire-picture').removeClass('show-picture');
});

