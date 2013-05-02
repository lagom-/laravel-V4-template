$(document).ready(function() {

$('i[data-toggle="tooltip"]').tooltip({
  'placement' : 'top'
});

$('.ajax-save').on('click', function(e) {
	e.preventDefault();

	var link = $(this);
	var href = link.attr('href');

	$.get(href, function() {

	});
});

});
