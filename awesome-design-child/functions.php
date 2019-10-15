<?php

add_action( 'wp_enqueue_scripts', 'awesome_design_child_enqueue_files' );
function awesome_design_child_enqueue_files() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
