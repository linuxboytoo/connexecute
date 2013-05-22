$(document).ready(function() {
	
	jQuery('input[default]').focus(function() {
  if ($(this).val()==$(this).attr("default")) { $(this).val(""); }
}).blur(function() {
  if ($(this).val()=="") { $(this).val($(this).attr("default")); }
});

});