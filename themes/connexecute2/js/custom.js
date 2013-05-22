$(document).ready(function() {
	
	jQuery('input[default]').each(function( index ) {
	
		alert(index.attr('value'));	
	});

});