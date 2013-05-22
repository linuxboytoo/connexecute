$(document).ready(function() {
	
	jQuery('input[default]')
		.focus(function() { if ($(this).val()==$(this).attr("default")) { $(this).val(""); $(this).css('color','#000000'); } })
		.blur( function() { if ($(this).val()=="") { $(this).val($(this).attr("default")); $(this).css('color','#ff0000'); } });

});