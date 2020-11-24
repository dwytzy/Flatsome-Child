<?php
// Add custom Theme Functions here
function dz_theme_scripts() {
	wp_enqueue_style( 'bebas-font', 'https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet', array(), '1.1', 'all');


  
}
add_action( 'wp_enqueue_scripts', 'dz_theme_scripts' );
show_admin_bar(false);
add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );

function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="viewport-fit=cover">';
}