<?php

/**
 * Loading the parent theme css.
 */
function divi_child_load_parent_css() {

	wp_enqueue_style( 'divi-parent-style', get_template_directory_uri() . '/style.css', false, '' );

}
add_action( 'wp_enqueue_scripts', 'divi_child_load_parent_css' );

// retire les versions de wordpress

remove_action("wp_head", "wp_generator");
