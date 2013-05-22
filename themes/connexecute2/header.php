<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en-US">
<head>
<title><?php wp_title(); ?></title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" media="all" href="/theme/style.css" />
<link rel="shortcut icon" href="/theme/favicon.ico"/>

<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/theme/js/jquery.cycle.lite.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$('.slideshow').cycle({ fx: 'fade', speed: 5000, pause: true });
	});
</script>

<?php wp_head(); ?>
</head>

<body>
	<div class='owrapper'>
		<div class='iwrapper'>
			<div id='header'>
				<div class='logo'></div>
			</div>
		</div>