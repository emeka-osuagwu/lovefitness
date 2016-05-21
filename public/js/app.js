// Foundation JavaScript
$(document).foundation();


$('.checkbox-wrapper').on('click', function() {
  $(this).toggleClass('checked');
  if ($(this).hasClass('checked')) {
    $('input[type="checkbox"]', this).prop('checked', true);
  } else {
    $('input[type="checkbox"]', this).prop('checked', false);
  }
})


$('.filter-toolbar .filter-button').on('click', function() {
	$('ul', this).toggleClass('active');
})