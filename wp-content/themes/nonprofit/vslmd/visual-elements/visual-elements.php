<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');

if ( ! defined( 'VE_VERSION' ) ) define( 'VE_VERSION', '2.0.9' );

// Visual Elements Base
$ve_core = THEME_DIR . "/vslmd/visual-elements/vslmd";

require_once( $ve_core . "/modules/icon-manager/icon-manager.php");
require_once( $ve_core . "/modules/svg/svg.php");

class visual_elements_settings {
  
  public function __construct() {
    
    add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
    add_action( 'admin_init', array( $this, 'init_settings'  ) );
    
  }
  
}


// WPBakery

include_once(ABSPATH.'wp-admin/includes/plugin.php');
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {

  class VCExtendAddonClass {
    function __construct() {
      // We safely integrate with VC with this hook
      add_action( 'init', array( $this, 'integrateWithVC' ) );
      $ve_core = THEME_DIR . "/vslmd/visual-elements/vslmd";
      require_once( $ve_core . "/vc-params/iconmanager.php");
      
      add_action('admin_enqueue_scripts',array($this,'icon_manager_scripts'));
      
      // Register CSS and JS
      add_action( 'wp_enqueue_scripts', array( $this, 'loadCssAndJs' ) );
    }
    
    function icon_manager_scripts($hook) {
      $ve_root = THEME_URI . "/vslmd/visual-elements/";
      wp_enqueue_style('backend_elements_style', $ve_root . 'assets/styles/backend.min.css' );
      
      // enqueue css files on backend
      if($hook == "post.php" || $hook == "post-new.php" || $hook == 'visual-composer_page_vc-roles'){
        if((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || is_ssl()) {
          $scheme = 'https';
        }
        else {
          $scheme = 'http';
        }
        $this->paths = wp_upload_dir();
        $this->paths['fonts']   = 've_icon_fonts';
        $this->paths['fonturl'] = set_url_scheme($this->paths['baseurl'].'/'.$this->paths['fonts'], $scheme);
        $fonts = get_option('ve_icon_fonts');
        if(is_array($fonts))
        {
          foreach($fonts as $font => $info)
          {
            if(strpos($info['style'], 'http://' ) !== false) {
              wp_enqueue_style('ve-'.$font,$info['style']);
            } else {
              wp_enqueue_style('ve-'.$font,trailingslashit($this->paths['fonturl']).$info['style']);
            }
          }
        }
      }
    }
    
    public function integrateWithVC() {
      // Check if WPBakery is installed
      if ( defined( 'WPB_VC_VERSION' ) ) {
        $ve_core = THEME_DIR . "/vslmd/visual-elements/vslmd";
        require_once( $ve_core . "/vc-elements/lean-map.php");
      }    
    }
    
    /*
    Load plugin css and javascript files which you may need on front end of your site
    */
    public function loadCssAndJs() {
      wp_register_style( 'elements_style', get_template_directory_uri() . '/vslmd/visual-elements/assets/styles/elements.css', array(), VE_VERSION );
      wp_enqueue_style( 'elements_style' );
      
      // If you need any javascript files on front end, here is how you can load them.
      wp_enqueue_script( 'elements_script', get_template_directory_uri() . '/vslmd/visual-elements/assets/scripts/elements.js', array(), VE_VERSION, true );
      
      wp_enqueue_script( 'libs_script', get_template_directory_uri() . '/vslmd/visual-elements/assets/scripts/libs.js', array(), VE_VERSION, true );
    }
  }
  // Finally initialize code
  new VCExtendAddonClass();

}