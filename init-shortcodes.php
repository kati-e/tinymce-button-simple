<?php 

class KLCTinyMCEShortcodes {

    function __construct() {
        add_shortcode('klc_banner_section', array($this, 'banner_section_shortcode'));
    }

    // Init Shortcode for blog posts CTA Banner Section
    public function banner_section_shortcode() {
        return '<div class="cta-banner">This is where the banner should go</div>';
    }

}

new KLCTinyMCEShortcodes();
?>