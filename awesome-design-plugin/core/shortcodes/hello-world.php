<?php

namespace AwesomeDesign\Shortcodes;

if ( ! defined('ABSPATH') ) {
    die('restricted access');
}
/**
 * Hello World Shortcode
 * Callback function for Hello World Shortcode
 *
 * @package     Awesome Design plugin
 * @subpackage  Shortcodes
 * @category    Shortcodes
 * @author      Hassan Riaz
 */
function HelloWorld( $atts = [] ) {
    return '<div class="test-shortcode">Hello World!</div>';
}

add_shortcode('hello_world', "AwesomeDesign\Shortcodes\HelloWorld");
