$('.artwork-card').bind('mouseenter', function(element) {
  $(this).children('.card-action').addClass('show-action');
});

$('.artwork-card').bind('mouseleave', function(element) {
  $(this).children('.card-action').removeClass('show-action');
});

