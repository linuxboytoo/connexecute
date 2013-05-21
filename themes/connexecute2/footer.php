</div>
<div class='owrapper bg_dark' id='o_footer'>
        <div class='iwrapper'>
                <div id='footer_column_1'>
                <?php
                        $data = get_post_by_tag('site_content_about_us');
                        echo '<h1>'.$data['title'].'</h1>';
                        echo '<p>'.$data['content'].'</p>';
                ?>
                <p>&copy; <?php echo date('Y'); ?>, Hurley Law Group
		</div>
                <div id='footer_column_2'>
                <?php
                        $data = get_post_by_tag('site_content_contact_us');
                        echo '<h1>'.$data['title'].'</h1>';
                        echo '<p>'.$data['content'].'</p>';
                ?>		
		</div>
        </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
