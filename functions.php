<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentynineteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'bootstrap-style',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'
    );
    wp_enqueue_style( 'fontawesome-style',
        'https://use.fontawesome.com/releases/v5.7.0/css/all.css'
    );



}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' )?>
