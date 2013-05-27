<div class='owrapper'>
	<div class='iwrapper bg_lightblue' style='height: 3px; margin-top: 20px;'></div>
</div>
<div class='owrapper'>
	<div id='footer' class='iwrapper'>
		<div id='navigation_footer'>
			<div class='navigation menu_right'>
			<?php wp_nav_menu( array('menu' => 'Primary Navigation Menu' )); ?>
			</div>
		</div>
		<div id='footer_left'>
			<div class='logo'></div>
			<div id='footer_contact' class='content'>
				<?php dynamic_sidebar('Footer Contact'); ?>
			</div>
			<div id='footer_copyright' class='content'>
				&copy; <?php echo date('Y'); ?> Connexecute. All rights reserved. <?php dynamic_sidebar('Footer Copyright'); ?>
			</div>
		</div>
		<div id='footer_right'>
			<div class='banner'>
				<?php dynamic_sidebar('Footer Call to Action'); ?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
