<?php
function theme_name_scripts() {
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'style-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css');
    wp_enqueue_style( 'style-swiper', get_template_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style( 'style-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style( 'custom-style-name', get_template_directory_uri() . '/assets/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


