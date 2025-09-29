<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'vslmd_register_required_plugins' );

/**
* Register the required plugins for this theme.
*
* In this example, we register five plugins:
* - one included with the TGMPA library
* - two from an external source, one from an arbitrary source, one from a GitHub repository
* - two from the .org repo, where one demonstrates the use of the `is_callable` argument
*
* The variables passed to the `tgmpa()` function should be:
* - an array of plugin arrays;
* - optionally a configuration array.
* If you are not changing anything in the configuration array, you can remove the array and remove the
* variable from the function call: `tgmpa( $plugins );`.
* In that case, the TGMPA default settings will be used.
*
* This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
*/

$product = wp_get_theme()->get( 'Name' );

if( $product == 'Food' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Timetable', // The plugin name.
				'slug'               => 'timetable', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/timetable.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Seller' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WooCommerce Product Filter', // The plugin name.
				'slug'               => 'woocommerce_product_filter', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/woocommerce-product-filter.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'YITH WooCommerce Wishlist',
				'slug'      => 'yith-woocommerce-wishlist',
				'required'  => false,
			),
			
			array(
				'name'      => 'YITH WooCommerce Popup',
				'slug'      => 'yith-woocommerce-popup',
				'required'  => false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Nonprofit' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'Give - Donation Plugin',
				'slug'      => 'give',
				'required'  => false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Cryptocurrency' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
			array(
				'name'		=> 'Cryptocurrency Price Ticker Widget',
				'slug'     	=> 'cryptocurrency-price-ticker-widget',
				'required'	=> false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Traveler' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
			array(
				'name'		=> 'AddToAny Share Buttons',
				'slug'     	=> 'add-to-any',
				'required'	=> false,
			),
			
			array(
				'name'		=> 'Easy Twitter Feed Widget',
				'slug'     	=> 'easy-twitter-feed-widget',
				'required'	=> false,
			),
			
			array(
				'name'		=> 'Contextual Related Posts',
				'slug'     	=> 'contextual-related-posts',
				'required'	=> false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Gym' || $product == 'Sport'  || $product == 'Medical' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Timetable', // The plugin name.
				'slug'               => 'timetable', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/timetable.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Fitness' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Timetable', // The plugin name.
				'slug'               => 'timetable', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/timetable.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
			array(
				'name'		=> 'bbPress',
				'slug'     	=> 'bbpress',
				'required'	=> false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Forum' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
			array(
				'name'		=> 'bbPress',
				'slug'     	=> 'bbpress',
				'required'	=> false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Dark' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Petshop' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'YITH WooCommerce Wishlist',
				'slug'      => 'yith-woocommerce-wishlist',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Education' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Timetable', // The plugin name.
				'slug'               => 'timetable', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/timetable.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'YITH WooCommerce Wishlist',
				'slug'      => 'yith-woocommerce-wishlist',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Financial' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
			array(
				'name'		=> 'Stock Market Overview',
				'slug'     	=> 'stock-market-overview',
				'required'	=> false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Realestate' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'Estatik',
				'slug'     	=> 'estatik',
				'required'	=> true,
			),
			
			array(
				'name'		=> 'Estatik Mortgage Calculator',
				'slug'     	=> 'estatik-mortgage-calculator',
				'required'	=> true,
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else if( $product == 'Visualmentor' ) {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'		         => 'Elementor Website Builder',
				'slug'     	         => 'elementor',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Essential Addons for Elementor',
				'slug'     	         => 'essential-addons-for-elementor-lite',
				'required'	         => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
} else {
	
	function vslmd_register_required_plugins() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(
			
			array(
				'name'		         => 'Theme Options',
				'slug'     	         => 'redux-framework',
				'required'	         => true,
				'force_activation'   => true,
			),
			
			array(
				'name'		         => 'Borderless',
				'slug'     	         => 'borderless',
				'required'	         => true,
				'force_activation'   => false,
			),
			
			array(
				'name'               => 'Slider Revolution', // The plugin name.
				'slug'               => 'revslider', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/revslider.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'WPBakery by Visualmodo', // The plugin name.
				'slug'               => 'js_composer', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/js_composer.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'               => 'Visual Composer Addons', // The plugin name.
				'slug'               => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
				'source'             => 'https://cdn.visualmodo.com/plugin/Ultimate_VC_Addons.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			
			array(
				'name'		=> 'One Click Demo Import',
				'slug'     	=> 'one-click-demo-import',
				'required'	=> false,
			),
			
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => false,
			),
			
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => false,
			),
			
		);
		
		$config = array(
			'id'           => 'vslmd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'vslmd-install-plugins', // Menu slug.
			'parent_slug'  => 'visualmodo',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			
		);
		
		tgmpa( $plugins, $config );
	}
	
}
