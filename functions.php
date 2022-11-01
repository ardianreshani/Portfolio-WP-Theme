<?php

function add_theme_scripts() {

    wp_register_style('main-style',get_template_directory_uri() . '/assets/css/main-style.css', [], filemtime(get_template_directory() . '/assets/css/main-style.css'), 'all' );
    wp_enqueue_style('main-style');

    wp_register_script('main-script',get_template_directory_uri() . '/assets/js/main-script.js', [], filemtime(get_template_directory() . '/assets/js/main-script.js'), 'false' );
    wp_enqueue_script('main-script');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
