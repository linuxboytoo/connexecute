$(document).ready(function() {
	
	jQuery('input[default]')
		.focus(function() { if ($(this).val()==$(this).attr("default")) { $(this).val(""); $(this).addClass('empty'); } })
		.blur( function() { if ($(this).val()=="") { $(this).val($(this).attr("default")); $(this).removeClass('empty'); } });

});