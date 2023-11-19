<?php 

class KLCTinyMCEButtons {

    function __construct() {
        add_filter('mce_buttons', array($this, 'init_buttons'));
        add_filter('mce_external_plugins', array($this, 'attach_button_functionality'));
    }

    // Initialise the TinyMCE button keys
    public function init_buttons($buttons) {
       
        $buttons[] = 'klc_add_banner';
        
        return $buttons;
    }

    // Link up the js custom button plugins for the TinyMCE 
    public function attach_button_functionality($plugin_array) {
        $plugin_array['mce_tinymce_button_functions_js'] = plugin_dir_url(__FILE__) . 'tinymce-button-functions.js';
        return $plugin_array;
    }
}

new KLCTinyMCEButtons();
?>