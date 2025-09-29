<?php
// don't load directly
defined( 'ABSPATH' ) || exit;

$product = wp_get_theme()->get( 'Name' );

// Check if Redux Framework is installed
if(class_exists('Redux_Framework_Plugin')){
    require_once( dirname( __FILE__ ) . '/config.php' );
    require_once( dirname( __FILE__ ) . '/config-metaboxes.php' );
    update_option('auto_update_redux_google_fonts', false );
} else if (is_admin() && $product != 'Aesir' ) { 

    function redux_admin_notice(){
        $theme = wp_get_theme();
        echo '<div class="error notice">
            <p><strong>'.$theme->get( 'Name' ).'</strong> requires <strong><a href="admin.php?page=vslmd-install-plugins">Theme Options</a></strong> plugin (free download) active to enable Theme Options back on your site.</p>
        </div>';
    }
    add_action('admin_notices', 'redux_admin_notice');

}