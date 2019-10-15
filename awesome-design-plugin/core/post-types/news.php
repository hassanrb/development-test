<?php

namespace AwesomeDesing\PostTypes;

if ( ! defined('ABSPATH') ) {
    die('restricted access');
}

/**
 * News Post Type Class
 *
 * This class contains the news post type code
 *
 * @package     Awesome Design Plugin
 * @subpackage  PostTypes
 * @category    PostTypes
 * @author      Hassan Riaz
 */
class News {
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct() {
        add_action( 'init', [&$this, 'register_post_type'], 0 );
    }

    /**
     * Register Post Type
     * A callback function to register actual post type
     *
     * @return void
     */
    public function register_post_type() {
        $labels = array(
            'name' => _x( 'News', 'Post Type General Name', 'awesome-design-plugin' ),
            'singular_name' => _x( 'News', 'Post Type Singular Name', 'awesome-design-plugin' ),
            'menu_name' => __( 'News', 'awesome-design-plugin' ),
            'name_admin_bar' => __( 'News', 'awesome-design-plugin' ),
            'archives' => __( 'News Archives', 'awesome-design-plugin' ),
            'attributes' => __( 'News Attributes', 'awesome-design-plugin' ),
            'parent_item_colon' => __( 'Parent News:', 'awesome-design-plugin' ),
            'all_items' => __( 'All News', 'awesome-design-plugin' ),
            'add_new_item' => __( 'Add New News', 'awesome-design-plugin' ),
            'add_new' => __( 'Add New', 'awesome-design-plugin' ),
            'new_item' => __( 'New News', 'awesome-design-plugin' ),
            'edit_item' => __( 'Edit News', 'awesome-design-plugin' ),
            'update_item' => __( 'Update News', 'awesome-design-plugin' ),
            'view_item' => __( 'View News', 'awesome-design-plugin' ),
            'view_items' => __( 'View News', 'awesome-design-plugin' ),
            'search_items' => __( 'Search News', 'awesome-design-plugin' ),
            'not_found' => __( 'Not found', 'awesome-design-plugin' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'awesome-design-plugin' ),
            'featured_image' => __( 'Featured Image', 'awesome-design-plugin' ),
            'set_featured_image' => __( 'Set featured image', 'awesome-design-plugin' ),
            'remove_featured_image' => __( 'Remove featured image', 'awesome-design-plugin' ),
            'use_featured_image' => __( 'Use as featured image', 'awesome-design-plugin' ),
            'insert_into_item' => __( 'Insert into News', 'awesome-design-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this News', 'awesome-design-plugin' ),
            'items_list' => __( 'Items list', 'awesome-design-plugin' ),
            'items_list_navigation' => __( 'Items list navigation', 'awesome-design-plugin' ),
            'filter_items_list' => __( 'Filter News list', 'awesome-design-plugin' ),
        );

        $rewrite = array(
            'slug' => 'news',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );

        $args = array(
            'label' => __( 'News', 'awesome-design-plugin' ),
            'description' => __( 'awesome-design-plugin News', 'awesome-design-plugin' ),
            'show_in_rest'  => true,
            'labels' => $labels,
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies' => array( 'category' ),
            'hierarchical' => false,
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'rewrite' => $rewrite,
            'capability_type' => 'page',
        );

        register_post_type( 'awesome_news', $args );
    }
}

new News;
