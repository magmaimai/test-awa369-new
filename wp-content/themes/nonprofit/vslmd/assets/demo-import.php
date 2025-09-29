<?php 

/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import
/*-----------------------------------------------------------------------------------*/

function ocdi_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'visualmodo';
    $default_settings['menu_title']  = esc_html__( 'Demo Import' , 'vslmd' );
    $default_settings['menu_slug']   = 'templates-library';
    
    return $default_settings;
  }
  add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );
  
  //Disable the ProteusThemes branding notice with a WP filter
  add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
  
  
  /*-----------------------------------------------------------------------------------*/
  /*	One Click Demo Import - Import Files
  /*-----------------------------------------------------------------------------------*/

$product = wp_get_theme()->get( 'Name' );

if( $product == 'Edge' ) {

function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Edge Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/edge/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/edge/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/edge/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/edge/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/edge/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Fitness' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Fitness Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/fitness/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/fitness/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/fitness/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/fitness/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/fitness/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Gym' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Gym Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/gym/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/gym/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/gym/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/gym/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/gym/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Zenith' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Zenith Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/zenith/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/zenith/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/zenith/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/zenith/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/zenith/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer_menu->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Sport' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Sport Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/sport/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/sport/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/sport/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/sport/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/sport/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $one_page = get_term_by( 'name', 'One Page', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'one_page' => $one_page->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Food' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Food Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/food/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/food/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/food/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/food/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/food/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'top_menu' => $top_menu->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Peak' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Peak Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/peak/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/peak/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/peak/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/peak/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/peak/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side_menu = get_term_by( 'name', 'Side', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'side_menu' => $side_menu->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Spark' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Spark Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/spark/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/spark/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/spark/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/spark/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/spark/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side_menu = get_term_by( 'name', 'Side', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'side' => $side_menu->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Stream' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Stream Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/stream/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/stream/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/stream/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/stream/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/stream/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side_menu = get_term_by( 'name', 'Side', 'nav_menu' );
    $one_page = get_term_by( 'name', 'One Page', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'side_menu' => $side_menu->term_id,
            'one_page' => $one_page->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Ink' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Ink Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/ink/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/ink/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/ink/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/ink/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/ink/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side_menu = get_term_by( 'name', 'Side Menu', 'nav_menu' );
    $categories = get_term_by( 'name', 'Categories', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'side_menu' => $side_menu->term_id,
            'categories' => $categories->term_id 
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Beyond' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Beyond Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/beyond/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/beyond/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/beyond/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/beyond/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/beyond/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Rare' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Rare Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/rare/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/rare/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/rare/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/rare/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/rare/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $side_navigation = get_term_by( 'Side Navigation', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id,
            'side_navigation' => $side_navigation->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Wedding' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Wedding Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/wedding/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/wedding/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/wedding/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/wedding/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/wedding/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Architect' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Architect Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/architect/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/architect/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/architect/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/architect/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/architect/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Medical' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Medical Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/medical/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/medical/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/medical/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/medical/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/medical/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Marvel' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Marvel Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/marvel/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/marvel/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/marvel/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/marvel/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/marvel/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $copyright_menu = get_term_by( 'name', 'Copyright Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'copyright_menu' => $copyright_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Seller' ) {

	function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Seller Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/seller/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/seller/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/seller/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/seller/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/seller/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Winehouse' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Winehouse Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/winehouse/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/winehouse/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/winehouse/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/winehouse/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/winehouse/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Nectar' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Nectar Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/nectar/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/nectar/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/nectar/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/nectar/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/nectar/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main / mobile', 'nav_menu' );
    $left = get_term_by( 'name', 'Left', 'nav_menu' );
    $right = get_term_by( 'name', 'Right', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'left' => $left->term_id,
            'right' => $right->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Mechanic' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Mechanic Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/mechanic/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/mechanic/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/mechanic/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/mechanic/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/mechanic/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Construction' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Construction Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/construction/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/construction/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/construction/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/construction/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/construction/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Traveler' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Traveler Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/traveler/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/traveler/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/traveler/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/traveler/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/traveler/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $categories = get_term_by( 'name', 'Categories', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'categories' => $categories->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Salon' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Salon Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/salon/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/salon/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/salon/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/salon/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/salon/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Music' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Music Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/music/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/music/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/music/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/music/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/music/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Resume' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Resume Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/resume/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/resume/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/resume/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/resume/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/resume/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $portfolio_menu = get_term_by( 'name', 'Portfolio Item Page Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'portfolio' => $portfolio_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    //$blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Hotel' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Hotel Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/hotel/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/hotel/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/hotel/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/hotel/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/hotel/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Cryptocurrency' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Cryptocurrency Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/cryptocurrency/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/cryptocurrency/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/cryptocurrency/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/cryptocurrency/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/cryptocurrency/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Dark' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Dark Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/dark/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/dark/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/dark/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/dark/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/dark/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Nonprofit' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Nonprofit Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/nonprofit/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/nonprofit/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/nonprofit/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/nonprofit/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/nonprofit/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Employment' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Employment Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/employment/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/employment/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/employment/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/employment/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/employment/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Forum' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Forum Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/forum/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/forum/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/forum/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/forum/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/forum/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Petshop' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Petshop Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/petshop/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/petshop/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/petshop/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/petshop/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/petshop/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Photography' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Photography Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/photography/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/photography/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/photography/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/photography/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/photography/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $main = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Education' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Education Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/education/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/education/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/education/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/education/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/education/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side = get_term_by( 'name', 'Side Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'side' => $side->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Minimalist' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Minimalist Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/minimalist/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/minimalist/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/minimalist/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/minimalist/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/minimalist/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $side = get_term_by( 'name', 'Side Navigation', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $fotter_right = get_term_by( 'name', 'Footer Right', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'side' => $side->term_id,
            'footer' => $footer->term_id,
            'fotter_right' => $fotter_right->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Cafe' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Cafe Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/cafe/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/cafe/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/cafe/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/cafe/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/cafe/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'top_menu' => $top_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'IT' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'IT Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/it/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/it/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/it/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/it/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/it/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Financial' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Financial Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/financial/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/financial/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/financial/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/financial/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/financial/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $services = get_term_by( 'name', 'Services', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
            'services' => $services->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Politic' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Politic Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/politic/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/politic/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/politic/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/politic/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/politic/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $proposals = get_term_by( 'name', 'Proposals', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
            'proposals' => $proposals->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Realestate' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Real Estate Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/realestate/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/realestate/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/realestate/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/realestate/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/realestate/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Church' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Church Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/church/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/church/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/church/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/church/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/church/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
            'footer' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

} elseif( $product == 'Visualmentor' ) {

    function vslmd_import_files() {
    return array(
        array(
            'import_file_name'           => 'Visualmentor Demo',
            //'categories'                 => array( 'Business', 'portfolio' ),
            'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/visualmentor/demo-content.xml',
            'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/visualmentor/widgets.wie',
            'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wpbakery/visualmentor/customizer.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/visualmentor/theme-options.json',
                    'option_name' => 'vslmd_options',
                ),
            ),
            'import_preview_image_url'   => 'https://cdn.visualmodo.com/library/templates/wpbakery/import-demo-cover.png',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'vslmd' ),
            'preview_url'                => 'https://theme.visualmodo.com/visualmentor/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'vslmd_import_files' );


// Assign Front page, Posts page and menu locations after the importer

function vslmd_after_import_setup() {

    // Assign menus to their locations.
    $main = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vslmd_after_import_setup' );

}

