$(document).ready(function() {
	
	jQuery('input[default]').each(function( index ) {
	
		jQuery(this).attr('value',jQuery(this).attr('default'));	
	});

});