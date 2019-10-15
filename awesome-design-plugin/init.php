<?php
/*
Plugin Name: Awesome Design Functionality
Plugin URI: http://wordpress.org/awesome-design-plugin
Description: A test project custom functionality
Version: 1.0
Author: Hassan Riaz
Author URI: #
License: GPLv2 or later
Text Domain: awesome-design-plugin
*/

namespace AwesomeDesign;

/**
 * Custom Plugin
 *
 * Awesome design custom plugin initializer class
 *
 * @package     Awesome Design plugin
 * @author      Hassan Riaz
 */
class Custom_Plugin {
    /**
     * WordPress plugin url
     *
     * @var string
     * @since 1.0
     */
    private $plugin_url;

    /**
     * WordPress plugin directory path
     *
     * @var string
     * @since 1.0
     */
    private $plugin_dir;

    /**
     * Constructor
     * The constructor to initilize the class and set the basic parameters
     *
     * @return  void
     */
    public function __construct() {
        $this->plugin_url = plugin_dir_url( __FILE__ );
        $this->plugin_dir = plugin_dir_path( __FILE__ );

        // Register custom post types
        $this->_register_custom_post_types();

        // Register shortcodes
        $this->_register_shortcodes();
    }

    /**
     * Register custom post types
     * Load the custom post type files
     *
     * @return void
     */
    private function _register_custom_post_types() {
        require_once $this->plugin_dir . '/core/post-types/news.php';
    }

    /**
     * Register Shortcodes
     * Load the custom shortcode files
     *
     * @return void
     */
    private function _register_shortcodes() {
        require_once $this->plugin_dir . '/core/shortcodes/hello-world.php';
    }
}

new Custom_Plugin;
