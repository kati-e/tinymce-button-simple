<?php 
/*
Plugin Name: KLC TinyMCE Buttons
Description: Super secret special extra buttons for your TinyMCE editor <3
Author: Katelyn Cleary
Author URI: https://klcleary.com/
Version: 1.0.0
*/

include_once(plugin_dir_path(__FILE__) . 'init-shortcodes.php');
include_once(plugin_dir_path(__FILE__) . 'init-buttons.php');

class KLCTinyMCE {

    function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue_plugin_styles'));
    }

    // Enqueue styles
    public function enqueue_plugin_styles() {
        wp_enqueue_style('editor-style', plugins_url('tinymce-button-styles.css', __FILE__));
    }

}

new KLCTinyMCE();
?>