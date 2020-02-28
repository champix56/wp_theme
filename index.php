<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php
           //require wp process
            wp_head(); ?>
    </head>
    <body>
        <?php get_header();?>
        <?php get_sidebar();?>
        <div id="content">
            content
        </div>
        <?php get_footer();?>
    </body>
    <?php 
    //require wp process
    wp_footer(); ?>
</html>