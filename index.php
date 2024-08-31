<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        wp_head('top');   
    ?>
</head>
<body>
    <h1>sajd</h1>
    <img src="<?php echo esc_url(get_theme_file_uri( 'assets/images/samsung.jpg '))?>" >
    <?php get_template_part(); ?>
    <?php 
        wp_footer('one') ;
    ?>
</body>
</html>