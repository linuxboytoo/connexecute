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
<script type="text/javascript" src="/theme/js/custom.js"></script>
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
				<div class='social'>
					<img src='/theme/images/social-youtube.jpg'></a>
					<img src='/theme/images/social-rss.jpg'>
					<a href='http://linkedin.com/company/connexecute' target='_blank'><img src='/theme/images/social-linkedin.jpg'></a>
					<a href='http://fb.com/connexecute' target='_blank'><img src='/theme/images/social-facebook.jpg'></a>
					<a href='http://twitter.com/connexecute' target='_blank'><img src='/theme/images/social-twitter.jpg'></a>
					<a href='mailto:info@connexecute.com'><img src='/theme/images/social-email.jpg'></a>
				</div>
				<div class='contact'>
					<?php dynamic_sidebar('Header Contact'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id='navigation_main' class='owrapper bg_lightblue'>
		<div class='iwrapper'>
			<div class='tagline'><?php bloginfo('description'); ?></div>
			<div class='navigation menu_right'>
				<?php wp_nav_menu( array('menu' => 'Primary Navigation Menu' )); ?>
			</div>
		</div>
	</div>