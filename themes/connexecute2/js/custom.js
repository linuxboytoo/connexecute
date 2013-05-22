$(document).ready(function() {
	
	jQuery('input[default]').each(function( index ) {
	
		alert(jQuery(this).attr('value'));	
	});

});