jQuery(document).ready(function($){

	$('input').change(function(){
		var v = $(this).val();
		var n = $(this).attr('name');

		$('table').find('.'+n).text(v)

	})

})