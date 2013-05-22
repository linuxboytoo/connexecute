$(document).ready(function() {
	
	jQuery('input[default]').each(function( index ) {
		position = jQuery(this).position();
		jQuery('<span/>').css('background-color': '#ff0000','left': position.left).appendTo(this);	
	});

});