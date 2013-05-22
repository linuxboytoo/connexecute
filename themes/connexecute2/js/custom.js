$(document).ready(function() {
	
	jQuery('input[default]').each(function( index ) {
	
		index.attr('value',index.attr('default'));
	
	});

});