// adds/deletes new activity box on button push
$(function() {
	$('button.new').click(function(e) {
		e.preventDefault();
		$('.box').append($('.box').html());
		console.log($('.box').html());
	});
	$('button.delete').click(function(e) {
		e.preventDefault();
		if ($('.form-actions').length > 1) {
			$('.form-actions').children().last.remove();
		}
	});

});